<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('financials.withdraw');
    }
    public function show(){

        return view('financials.YourWithdraws');
    }
}
