@extends('layouts.app')
@section('WithDrawPageStyles')
    <link href="{{('/css/withdraw.css')}}" rel="stylesheet">
    <link href="{{('/css/BIZwithdraw.css')}}" rel="stylesheet">
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
            <div class="container">
                <form method="post" style="    margin-top: 30px;">
                    <input type="hidden" name="a" value="withdraw">
                    <input type="hidden" name="action" value="preview">






                    <div class="a-name" style="margin: 0px 0px 0px 85px;font-size: 20px;
    color: #42acea;">Payment system:</div>
                    <div class="clearfix"></div>
                    <div class="withdraw_method">
                        <div class="row">
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="u-name" style="margin: 0px 0px 0px 84px;font-size: 20px;
    color: #42acea;">Enter the amount to withdraw:</div>

                    <p style="margin: 22px 83px 8px;">Balance and payment information</p>









                    <div class="deposit_info gray_gradient clearfix">
                        <div class="choose-method">
                            <div class="leftwi2">

                            </div>


                            <input type="hidden" id="ec" name="ec" value="48" class="cell inpts ps-insert" size="15">
                            <div class="choose-method-inpts">
                                <div class="withdraw-method-input" data-payment="48">
                                    <input id="amount-btc" type="text" name="amount-btc" value="0.01" class="withdraw-input" size="15">
                                    <input id="amount" type="hidden" name="amount" value="40" class="" size="15">
                                    <input id="exchange" type="hidden" disabled="" value="4000">
                                </div>

                                <input type="submit" value="Withdraw" class="withdraw_btn">
                            </div>

                        </div>
                    </div>
            </div>


            @if(!(Auth::user()->PerfectMoneyAcc))
            <span id="P_29">
                <img src="/images/icon-warning.png" id="IMG_30" alt='ups'/> Your PerfectMoney Account:<a href="/edit/#DIV_2">You havent set up this email yet</a> <span id="SPAN_31"><a href="/edit" id="A_32"></a></span></span>
            @else<span id="P_29">
                <img src="" id="IMG_30" alt='ups'/> Your PerfectMoney Account:{{Auth::user()->PerfectMoneyAcc}} </span>
            @endif
                    <br><hr>





            @if(!(Auth::user()->WebMoneyAcc))
                <span id="P_29">
                <img src="/images/icon-warning.png" id="IMG_30" alt='ups'/> Your WebMoney Account:<a href="/edit/#DIV_2">You havent set up this email yet</a> <span id="SPAN_31"><a href="/edit" id="A_32"></a></span></span>
            @else<span id="P_29">
                <img src="/images/galo4ka.jpg" id="IMG_30" alt=''/> Your WebMoney Account:<span id="SPAN_31">{{Auth::user()->WebMoneyAcc}} <a href="/edit" id="A_32"></a></span></span>
            @endif
            <br><hr>


            @if(!(Auth::user()->AdvCashAcc))
                <span id="P_29">
                <img src="/images/icon-warning.png" id="IMG_30" alt='ups'/> Your AdvCash Account:<a href="/edit/#DIV_2">You havent set up this email yet</a> <span id="SPAN_31"><a href="/edit" id="A_32"></a></span></span>
            @else<span id="P_29">
                <img src="/images/galo4ka.jpg" id="IMG_30" alt=''/> Your AdvCash Account:<span id="SPAN_31">{{Auth::user()->AdvCashAcc}} <a href="/edit" id="A_32"></a></span></span>
            @endif
            <br><hr>



                </form>
            </div>
        </div>
        <!--tpl_wrap-->

    </div>
</div>

    @endsection