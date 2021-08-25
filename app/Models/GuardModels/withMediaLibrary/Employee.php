<?php

namespace App\Models\GuardModels;

use App\Models\EmployeeModels\Level;
use App\Models\EmployeeModels\Major;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use App\Models\EmployeeModels\Department;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use App\Models\EmployeeModels\Academiclevel;
use App\Models\EmployeeModels\Employeegroup;
use App\Models\EmployeeModels\Employeeacademic;
use App\Models\EmployeeModels\Employeepersonal;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Notifications\Employee\Auth\VerifyEmail;
use App\Models\EmployeeModels\Semesterinstructor;
use App\Notifications\Employee\Auth\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable implements HasMedi
{
    use HasMediaTrait;
    use Notifiable;
    use HasRoles;

    public const ACCEPTED_STATUS = '1';

    /**
     * Model hooks
     */
    protected static function boot(){
        parent::boot();

        static::creating(function($emoloyee){
            $emoloyee->password = bcrypt($emoloyee->password);
        });
    }




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password',
        'name', 'email', 'password',
        'first_name', 'second_name', 'third_name', 'fourth_name', 'instructor','accepted'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    public function employeepersonal()
    {
        return $this->hasOne(Employeepersonal::class);
    }

    public function academiclevel()
    {
        return $this->hasOne(Academiclevel::class);
    }

    public function level()
    {
        return $this->hasOne(Level::class);
    }
    // public function employeeacademic()
    // {
    //     return $this->hasOne(Employeeacademic::class);
    // }

    public function semesterinstructor()
    {
        return $this->hasMany(Semesterinstructor::class);
    }

    public function emplyeegroup()
    {
        return $this->hasMany(Employeegroup::class);
    }
    // public function userpermission()
    // {
    //     return $this->hasMany(Userpermission::class);
    // }
    public function major()
    {
        return $this->hasMany(Major::class);
    }
    public function department()
    {
        return $this->hasMany(Department::class);
    }
    public function getEmployeeFullName()
    {
        return $this->first_name . " " . $this->fourth_name;
    }

    
    // عرض صورة الموظف في صفحة عرض بيانات الموظف
    public function getImage()
    {

        return $this->getFirstMediaUrl('images');
        // return is_null(optional($this->media->first())->getFullUrl()) ? $this->media->first()->getFullUrl() : "لم يتم رفع صورة";
        // return optional(!($this->media->first()->getFullUrl()) == null) ? $this->media->first()->getFullUrl() : "لم يتم رفع صورة";
    }

    public function hasImage()
    {
        return $this->media->count() != 0;
    }

    public function isInstructor()
    {
        return $this->instructor == 1;
    }

    public function isSuperUser()
    {
        return $this->id == 1;
    }


    public function userHasRole($role)
    {

        if (auth('employee')->id() == 1) {
            return true;
        }

        return auth('employee')->user()->hasRole($role);
    }



    public function userCan($permissionName, $id = null)
    {
        if ($id == null) {
            if (auth("employee")->id() == 1) {
                return true;
            }
        } else {
            return  Employee::findOrFail($id)->can($permissionName);
        }
        return $this->can($permissionName);
    }
}
