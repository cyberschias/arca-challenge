<?php

namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;
use InfyOm\Generator\Common\BaseRepository;
use Sentinel;

/**
 * Class UserRepository
 * @package App\Repositories
 *
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
*/
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'username',
        'email',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    public function filterAttributesBefore($attributes, $id = null)
    {
        if ($id) {
            if (isset($attributes['password']) and $attributes['password'] != '') {
                $new_password = $attributes['password'];
            } else {
                unset($attributes['password']);
            }
        }

        return $attributes;
    }

    public function filterAttributesAfter($attributes, $row)
    {
        if (isset($attributes['roles'])) {
            $row->roles()->sync($attributes['roles']);
        }

        return $row;
    }

    public function findWithoutFail($id, $columns = ['*'])
    {
        try {
            $this->model = $this->model->where('id', $id);
            $this->model->select($columns);

            return parent::first();
        } catch (Exception $e) {
            return;
        }
    }

    public function create(array $attributes)
    {
        $attributes = $this->filterAttributesBefore($attributes);
        $row = Sentinel::registerAndActivate($attributes);
        $row = $this->filterAttributesAfter($attributes, $row);

        return $row;
    }

    public function update(array $attributes, $id)
    {
        $attributes = $this->filterAttributesBefore($attributes, $id);
        $row = Sentinel::findById($id);
        $row = Sentinel::update($row, $attributes);
        $row = $this->filterAttributesAfter($attributes, $row);

        return $row;
    }
}
