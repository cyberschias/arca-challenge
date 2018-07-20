<?php

namespace App\Models;

use \Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Authenticatable;

/**
 * Class User
 * @package App\Models
 * @version July 19, 2018, 3:25 am UTC
 *
 * @property string name
 * @property string username
 * @property string email
 * @property string password
 * @property string permissions
 * @property string|\Carbon\Carbon last_login
 */
class User extends EloquentUser
{
    use SoftDeletes, Authenticatable;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'username',
        'email',
        'password',
        'permissions',
        'last_login',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'permissions' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'nullable|email',
        'username' => 'required',
        'password' => 'nullable|min:6',
    ];

    /**
     * Validation rules labels
     *
     * @var array
     */
    public static $rules_labels = [
        'email' => 'E-mail',
        'username' => 'Username',
        'password' => 'Password',
    ];

    /**
     * Array of login column names.
     *
     * @var array
     */
    protected $loginNames = ['username', 'email'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'role_users', 'user_id', 'role_id');
    }
}
