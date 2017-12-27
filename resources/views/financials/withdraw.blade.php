@extends('layouts.app')
@section('WithDrawPageStyles')
    <link href="{{('/css/withdraw.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')


<div class="container">
    <div id="DIV_1">
        <div id="DIV_2">
            <div id="DIV_3" style="margin:0px 0px 7px;">
                <div id="DIV_4">
                    <i id="I_5"></i> Withdraw
                </div>
                <div id="DIV_6">
                    Welcome, <span id="SPAN_7">{{Auth::user()->name}}</span>!
                </div>
            </div>
            <div id="DIV_8">
                <form method="post" id="FORM_9">
                    <input type="hidden" name="a" value="withdraw" id="INPUT_10" />
                    <input type="hidden" name="action" value="preview" id="INPUT_11" />
                    <div id="DIV_12">
                        Payment system:
                    </div>
                    <div id="DIV_13">
                    </div>
                    <div id="DIV_14">
                        <div id="DIV_15">
                        </div>
                    </div>
                    <div id="DIV_16">
                    </div>
                    <div id="DIV_17">
                        Enter the amount to withdraw:
                    </div>
                    <p id="P_18">
                        Balance and payment information
                    </p>
                    <div id="DIV_19">
                        <div id="DIV_20">
                            <div id="DIV_21">
                            </div>
                            <input type="hidden" id="INPUT_22" name="ec" value="48" size="15" />
                            <div id="DIV_23">
                                <div id="DIV_24">
                                    <input id="INPUT_25" type="text" name="amount-btc" value="0.01" size="15" />
                                    <input id="INPUT_26" type="hidden" name="amount" value="40" size="15" />
                                </div>
                                <input type="submit" value="Withdraw" id="INPUT_28" style="margin:-2px 154px 0px 10px;" />
                            </div>
                        </div>
                    </div>
                    <p id="P_29">
                        <img src="/img/redesign/cabinet/icon-warning.png" id="IMG_30" alt='' /> Your PerfectMoney Account: <span id="SPAN_31"><a href="/edit" id="A_32">validation if user has acc or not</a></span>
                    </p>
                    <p id="P_33">
                        <img src="/img/redesign/cabinet/icon-warning.png" id="IMG_34" alt='' /> Your Payeer Account: <span id="SPAN_35"><a href="/edit" id="A_36">validation if user has acc or not</a></span>
                    </p>
                    <p id="P_37">
                        <img src="/img/redesign/cabinet/icon-warning.png" id="IMG_38" alt='' /> Your AdvCash Account: <span id="SPAN_39"><a href="/edit" id="A_40">validation if user has acc or not</a></span>
                    </p>
                    <p id="P_41">
                        <img src="/img/redesign/cabinet/icon-warning.png" id="IMG_42" alt='' /> Your Bitcoin Account: <span id="SPAN_43"><a href="/edit" id="A_44">validation if user has acc or not</a></span>
                    </p>
                </form>
            </div>
        </div>
        <!--tpl_wrap-->

    </div>
</div>

    @endsection