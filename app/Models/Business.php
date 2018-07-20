<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Business
 * @package App\Models
 * @version July 20, 2018, 2:40 am UTC
 *
 * @property \App\Models\Category category
 * @property integer category_id
 * @property string title
 * @property string description
 * @property string phone
 * @property string address
 * @property string city
 * @property string state
 * @property string zipcode
 */
class Business extends Model
{
    use SoftDeletes;

    public $table = 'businesses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'category_id',
        'title',
        'description',
        'phone',
        'address',
        'city',
        'state',
        'zipcode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zipcode' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'title' => 'required|max:150',
        'phone' => 'max:20',
        'address' => 'required|max:200',
        'city' => 'required|max:200',
        'state' => 'required|max:2',
        'zipcode' => 'required||max:20'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function address($pattern = '%a - %c, %e - %z'){
        $a = array("%a", "%c", "%e", "%z");
        $b = array($this->address, $this->city, $this->state, $this->zipcode);
        $address = str_replace($a, $b, $pattern);
        return $address;
    }
}
