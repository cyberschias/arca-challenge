<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class BusinessCriteriaCriteria.
 *
 * @package namespace App\Criteria;
 */
class BusinessCriteria implements CriteriaInterface
{

    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $input = $this->request->all();
        if ($input)
        {
            if (isset($input['search']) and $input['search'] != '')
            {
                $model = $model->where('title', 'like', '%'.$input['search'].'%')
                                ->orWhere('address', 'like', '%'.$input['search'].'%')
                                ->orWhere('city', 'like', '%'.$input['search'].'%')
                                ->orWhere('zipcode', 'like', '%'.$input['search'].'%')
                                ->orWhereHas('category', function($query) use ($input) {
                                    $query->where('title', 'like', '%'.$input['search'].'%');
                                });
            }
        }

        return $model;
    }
}
