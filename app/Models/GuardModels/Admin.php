<?php

namespace App\Models\GuardModels;

use Illuminate\Notifications\Notifiable;
use App\Notifications\Admin\Auth\VerifyEmail;
use App\Notifications\Admin\Auth\ResetPassword;
use App\Models\PermissionModels\Extrapermission;
use App\Models\PermissionModels\Guardtype;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable, HasRoles;
    // protected $guard_name = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'status'
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

    public function userCan($permissionName, $id = null)
    {
        if ($id == null) {
            if (auth("admin")->id() == 1) {
                return true;
            }
        }else{
         return   Admin::findOrFail($id)->can($permissionName);
        }
        return $this->can($permissionName);
    }
}
