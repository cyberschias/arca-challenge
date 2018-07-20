<?php

namespace App\Repositories;

use App\Models\Business;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BusinessRepository
 * @package App\Repositories
 * @version July 20, 2018, 2:40 am UTC
 *
 * @method Business findWithoutFail($id, $columns = ['*'])
 * @method Business find($id, $columns = ['*'])
 * @method Business first($columns = ['*'])
*/
class BusinessRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Business::class;
    }
}
