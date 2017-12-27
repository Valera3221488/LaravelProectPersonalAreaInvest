@extends('layouts.app')
@section('HomePageStyles')
    <!-- Custom styles for this template -->
    <link href="{{ asset('HomePage.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')




        <div class="container" style="background-color: white; padding-left: 1px;">
            <div id="PoloskaContainer_2" style="width: 1169px">
                <div id="PoloskaContainer_3">
                    <i id="Kartino4kaContainer_4"></i> Account
                </div>
                <div id="PoloskaContainer_5">
                   Welcome, <span id="BlueText_6">{{Auth::user()->name}}</span>!
                </div>
            </div>
            <br>
            <div class="container" >
            <div class="u-name" style="font-size: 20px;
    color: #42acea;
    margin-bottom: 17px;">Email/User name:  {{Auth::user()->email}}</div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="u-info" style="font-size: 20px;
    color: #42acea;">
                    Registration Date: {{Auth::user()->created_at->toFormattedDateString()}}
                </div>
            </div>
            </div>

        </div>

        <div class="row marketing" style="padding-bottom: 27px;">
            <div class="col-lg-6">
                <table id="TABLE_1" style="margin: 21px 15px 0px;">
                    <tbody id="TBODY_2">
                    <tr id="TR_3">
                        <td id="TD_4">
                            Заработано всего:
                        </td>
                        <td id="TD_5">
                            USD 0
                        </td>
                    </tr>
                    <tr id="TR_6">
                        <td id="TD_7">
                            Ожидающий вывод:
                        </td>
                        <td id="TD_8">
                            USD 0
                        </td>
                    </tr>
                    <tr id="TR_9">
                        <td id="TD_10">
                            Снято Всего:
                        </td>
                        <td id="TD_11">
                            USD 0
                        </td>
                    </tr>
                    <tr id="TR_12">
                        <td id="TD_13">
                            Active Deposit:
                        </td>
                        <td id="TD_14">
                            USD 0
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
        </div>



@endsection
