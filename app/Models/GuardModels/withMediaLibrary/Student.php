<?php

namespace App\Models\GuardModels;


use App\Models\EmployeeModels\Mark;

use App\Models\EmployeeModels\Stdstatus;

use Illuminate\Notifications\Notifiable;
use App\Models\EmployeeModels\Externaltr;
use App\Models\EmployeeModels\Studentfee;
use App\Models\EmployeeModels\Studentrequest;
use App\Models\EmployeeModels\Volunteerhours;
use App\Models\EmployeeModels\Studentacademic;
use App\Models\EmployeeModels\Studentbridging;
use App\Models\EmployeeModels\Studentpersonal;
use App\Models\EmployeeModels\Studentexemption;
use App\Notifications\Student\Auth\VerifyEmail;
use App\Models\EmployeeModels\Studenthighschool;
use App\Models\EmployeeModels\Studentsemesteravg;
use App\Notifications\Student\Auth\ResetPassword;
use App\Models\EmployeeModels\Studentminimumcharge;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Student extends Authenticatable implements HasMedia
{
    use HasMediaTrait;
    use Notifiable;


    public const GRADUATE_STATUS = 23;
    public const NEW_STATUS = 21;
    public const CONTINUING_STATUS = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    // 'id', 'email', 'password', 'stdstatus_id',
    // ];

    protected $guarded = [];

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

    public function studentpersonal()
    {
        return $this->hasOne(Studentpersonal::class);
    }

    public function studentacademic()
    {
        return $this->hasOne(Studentacademic::class);
    }

    public function studentbridging()
    {
        return $this->hasOne(Studentbridging::class);
    }

    public function studenthighschool()
    {
        return $this->hasOne(Studenthighschool::class);
    }

    public function studentfee()
    {
        return $this->hasMany(Studentfee::class);
    }

    public function volunteerhours()
    {
        return $this->hasMany(Volunteerhours::class);
    }

    public function externaltr()
    {
        return $this->hasMany(Externaltr::class);
    }
    public function studentsemesteravg()
    {
        return $this->hasMany(Studentsemesteravg::class);
    }
    public function mark()
    {
        return $this->hasMany(Mark::class);
    }

    public function studentrequest()
    {
        return $this->hasMany(Studentrequest::class);
    }

    public function studentminimumcharge()
    {
        return $this->hasMany(Studentminimumcharge::class);
    }
    public function studentexemption()
    {
        return $this->hasMany(Studentexemption::class);
    }
    public function stdstatus()
    {
        return $this->belongsTo(Stdstatus::class);
    }


    public function applyMinCharge($id)
    {

        return $this->studentminimumcharge()->create(['student_id' => $this->id, 'semester_id' => $id]);
    }

    public function checkMinCharge($id)
    {
        if ($this->studentminimumcharge()->where('semester_id', $id)->count() == 0) {
            return true;
        }
        return false;
    }


    // عرض صورة الطالب في صفحة عرض بيانات الطلبة
    public function getImage()
    {

        return $this->getFirstMediaUrl('images');
        // return is_null(optional($this->media->first())->getFullUrl()) ? $this->media->first()->getFullUrl() : "لم يتم رفع صورة";
        // return optional(!($this->media->first()->getFullUrl()) == null) ? $this->media->first()->getFullUrl() : "لم يتم رفع صورة";
    }
}
