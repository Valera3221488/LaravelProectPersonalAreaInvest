<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index(){

         return view('financials.deposit');
     }
      public function show(){


         return view('financials.YourOpenDeposits');
      }

      public function history(){


          return view('financials.HistoryOfYourDeposits');
      }

}
