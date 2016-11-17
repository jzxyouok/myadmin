<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /*
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {

    }

    public function index(){
        return view('user.index')->with(['id'=>1, 'name'=>'test']);
    }




}
