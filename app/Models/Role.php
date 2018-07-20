<?php

namespace App\Models;

use App\LoggableModel as Model;

/**
 * Class Role
 * @package App\Models
 * @version April 19, 2017, 5:03 pm UTC
 */
class Role extends Model
{
    public $table = 'roles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = [
		'created_at',
		'updated_at'
	];

    public $fillable = [
        'slug',
        'name',
		'permissions'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
		'permissions' => 'json'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
		'permissions' => 'required'
    ];
}
