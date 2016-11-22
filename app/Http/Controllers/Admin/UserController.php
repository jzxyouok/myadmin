<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /*
     * Create a new controller instance.
     * @return void
     */

    public $pageNum = 2;

    public function __construct()
    {

    }

    public function index(){
//        $inputs = $request->all();
        $user = User::paginate(1);
//        if(isset($inputs['name']) && !empty($inputs['name'])){
//            $user = $user->where('name', 'regexp', $inputs['name']);
//        }

//        dump($user->links());
//        return view('user.index')->with(["users"=>$user]);
        return view('user.index', ['users' => $user]);
    }




}
