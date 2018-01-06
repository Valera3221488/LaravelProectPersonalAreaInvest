<?php

namespace App\Http\Controllers;

use App\Withdraw;
use Illuminate\Http\Request;
use App\Deposit;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $withdrawals=Withdraw::all()->sum('amount');
        $deposits=Deposit::all()->sum('amount');


        return view('home',compact('withdrawals','deposits'));
    }
}
