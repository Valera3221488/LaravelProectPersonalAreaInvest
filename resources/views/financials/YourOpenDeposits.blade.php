@extends('layouts.app')
@section('YourDepositsPageStyles')
    <link href="{{('/css/YourDeposits.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


@endsection
@section('content')
<div class="container">
    <div id="DIV_1">
        <div id="DIV_2">
            <div id="DIV_3">
                <div id="DIV_4">
                    <div id="DIV_5">
                        <i id="I_6"></i> Your deposits
                    </div>
                    <div id="DIV_7">
                        Welcome, <span id="SPAN_8">{{Auth::user()->name}}</span>!
                    </div>
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count(Auth::user()->deposits))
                            @foreach(Auth::user()->deposits as $deposit)
                                @if($deposit->deposit_status==1)
                                    <tr>
                                        <th scope="row">{{$deposit->id}}</th>
                                        <td>{{$deposit->deposit_type}}</td>
                                        <td>{{$deposit->amount}}&nbsp;USD</td>
                                        <td>{{$deposit->created_at->toFormattedDateString()}}</td>

                                    </tr>


                                @endif
                            @endforeach
                        @else <th scope="row"> No transactions founded</th>
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
            </body>
            </html>
            </div>
            <!--tpl_wrap-->

        </div>
    </div>




</div>
    @endsection