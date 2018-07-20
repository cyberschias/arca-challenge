<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Repositories\BusinessRepository;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BusinessController extends AppBaseController
{
    /** @var  BusinessRepository */
    private $businessRepository;
    private $categoryRepository;

    public function __construct(BusinessRepository $businessRepo, CategoryRepository $categoryRepo)
    {
        $this->businessRepository = $businessRepo;
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Business.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->businessRepository->pushCriteria(new RequestCriteria($request));
        $businesses = $this->businessRepository->paginate(15);

        return view('dashboard.businesses.index')->with('businesses', $businesses);
    }

    /**
     * Show the form for creating a new Business.
     *
     * @return Response
     */
    public function create()
    {
        $listCategories = $this->categoryRepository->allList(['' => 'Choose one...']);

        return view('dashboard.businesses.create')->with('listCategories', $listCategories);
    }

    /**
     * Store a newly created Business in storage.
     *
     * @param CreateBusinessRequest $request
     *
     * @return Response
     */
    public function store(CreateBusinessRequest $request)
    {
        $input = $request->all();

        $business = $this->businessRepository->create($input);

        Flash::success('Business saved successfully.');

        return redirect(route('businesses.index'));
    }

    /**
     * Display the specified Business.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $business = $this->businessRepository->findWithoutFail($id);

        if (empty($business)) {
            Flash::error('Business not found');

            return redirect(route('businesses.index'));
        }

        return view('dashboard.businesses.show')->with('business', $business);
    }

    /**
     * Show the form for editing the specified Business.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $business = $this->businessRepository->findWithoutFail($id);

        if (empty($business)) {
            Flash::error('Business not found');

            return redirect(route('businesses.index'));
        }

        $listCategories = $this->categoryRepository->allList(['' => 'Choose one...']);

        return view('dashboard.businesses.edit')->with('listCategories', $listCategories)->with('business', $business);
    }

    /**
     * Update the specified Business in storage.
     *
     * @param  int              $id
     * @param UpdateBusinessRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusinessRequest $request)
    {
        $business = $this->businessRepository->findWithoutFail($id);

        if (empty($business)) {
            Flash::error('Business not found');

            return redirect(route('businesses.index'));
        }

        $business = $this->businessRepository->update($request->all(), $id);

        Flash::success('Business updated successfully.');

        return redirect(route('businesses.index'));
    }

    /**
     * Remove the specified Business from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $business = $this->businessRepository->findWithoutFail($id);

        if (empty($business)) {
            Flash::error('Business not found');

            return redirect(route('businesses.index'));
        }

        $this->businessRepository->delete($id);

        Flash::success('Business deleted successfully.');

        return redirect(route('businesses.index'));
    }
}
