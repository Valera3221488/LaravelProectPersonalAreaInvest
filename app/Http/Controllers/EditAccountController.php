<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


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
         Validator::make(request()->all(),[
             'name'=>'required|string|max:255',
             'phone'=>'required|regex:/[0-9][0-9]{9}/',
             'password'=>'confirmed',
             'PerfectMoneyAcc'=>'string|email|max:255|unique:users',
             'WebMoneyAcc'=>'string|email|max:255|unique:users',
             'AdvCashAcc'=>'string|email|max:255|unique:users',
             'email'=>'string|string|email|max:255|unique:users',
         ]);


         $user=User::find(request()->id);
         $user->name=$request->input('name');
         $user->phone=$request->input('phone');
         if ( ! $request->input('password') == '')
         {
             $user->password = bcrypt($request->input('password'));
         }
         $user->PerfectMoneyAcc=$request->input('PerfectMoneyAcc');
         $user->WebMoneyAcc=$request->input('WebMoneyAcc');
         $user->AdvCashAcc=$request->input('AdvCashAcc');
         $user->email=$request->input('email');
         $user->save();

        //*** Сообщение,которое показывается после обновление данных пользователя ***///

        Session::flash('message', 'Your data has been updated');

                              ///*** Стили для этого сообщения *** ///
         ///
         Session::flash('alert-class', 'alert-success');

         return redirect('edit/#A_1');









     }
}
