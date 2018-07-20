<?php

namespace App\Http\Controllers;

use App\Criteria\BusinessCriteria;
use Illuminate\Http\Request;
use App\Repositories\BusinessRepository;
use Flash;

class FrontEndController extends Controller
{
    /** @var  BusinessRepository */
    private $businessRepository;

    public function __construct(BusinessRepository $businessRepo)
    {
        $this->businessRepository = $businessRepo;
    }

    public function index(Request $request)
    {
        $businesses = [];

        if($request->input('search') != ''){
            $this->businessRepository->pushCriteria(new BusinessCriteria($request));
            $businesses = $this->businessRepository->paginate(10);
        }

        return view('frontend.index')->with('businesses', $businesses);
    }

    public function show($url = '', Request $request)
    {
        $businesses = [];

        $business = $this->businessRepository->findByField('url', $url)->first();

        if (empty($business)) {
            Flash::error('Business not found');

            return redirect(route('frontend.index'));
        }

        return view('frontend.detail')->with('business', $business);
    }
}
