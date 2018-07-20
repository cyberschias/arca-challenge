<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Flash;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('sentinel.guest', ['except' => 'logout']);
    }

    /**
     * Show Login Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $data = [];

        return view('dashboard.auth.login', $data);
    }

    public function checkLogin(Request $request)
    {
        $input = $request->all();

        try {
            $user = \Sentinel::authenticate($input);
        } catch (\Exception $e) {
            Flash::error('User isn\'t active');
            return \Redirect::to('login');
        }

        if ($user) {

            \Sentinel::loginAndRemember($user);

            return \Redirect::to('dashboard/home');
        } else {
            Flash::error('Incorrect data');
        }

        return \Redirect::to('dashboard/login');
    }

    public function logout()
    {
        \Sentinel::logout();
        return \Redirect::to('dashboard/login');
    }
}
