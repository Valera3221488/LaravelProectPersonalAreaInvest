<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class EditAccountController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


     public function index(){

        return view('auth.EditAcc');
     }


     public function update(Request $request)
     {

         $this->validate($request,[
                 'name'=>'required|string|max:255',
                 'phone'=>'required|regex:/[0-9][0-9]{9}/',
                 'password'=>'required|string|min:6|confirmed',
                 'PerfectMoneyAcc'=>'required|string|email|max:255|unique:users',
                 'WebMoneyAcc'=>'required|string|email|max:255|unique:users',
                 'AdvCashAcc'=>'required|string|email|max:255|unique:users',

             ]);
         User::update($request->all());
         return redirect()->route('auth.EditAcc');

         session()->flash('message','Your account information has been updated');



     }
}
