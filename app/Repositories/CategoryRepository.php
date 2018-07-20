<?php

namespace App\Repositories;

use App\Models\Category;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version July 20, 2018, 2:40 am UTC
 *
 * @method Category findWithoutFail($id, $columns = ['*'])
 * @method Category find($id, $columns = ['*'])
 * @method Category first($columns = ['*'])
*/
class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Category::class;
    }

    public function allList($arr = [])
    {
        $this->model = $this->model->orderBy('title', 'asc');

        $items = $this->all();
        foreach ($items as $item)
        {
            $arr[$item->id] = $item->title;
        }
        return $arr;
    }
}
