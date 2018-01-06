<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $user= new User;

        return view('financials.withdraw',compact('user'));
    }
    public function show(){

        return view('financials.YourWithdraws');
    }
}
