<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    protected $table = 'users';
    protected $primaryKey ='UserID';
    protected $fillable = [
        'UserID','UserName', 'Email', 'DepartmentID','Is_Admin','Phone','FullName','Gender','Birthday'];
    public $timestamp =false;
        
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function group(){
        return $this -> belongsToMany('App\Group','group_users');
    }
}