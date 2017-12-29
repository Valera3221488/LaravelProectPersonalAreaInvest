@extends('layouts.app')
@section('EarnHistoryPageStyles')
    <link href="{{('/css/EarnHistoryStyles.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')
    <div id="DIV_1" style="margin:0px 111px 30px;">
        <div id="DIV_2">
            <div id="DIV_3">
                <i id="I_4"></i> Earning History
            </div>
            <div id="DIV_5">
                Welcome, <span id="SPAN_6">{{ Auth::user()->name }}</span>!
            </div>
        </div>
<div class="container" style="margin:0px 0px 0px -93px;">
    <div class="acc-wrap">
        <form method="post" name="opts" id="FORM_7">
            <input type="hidden" name="a" value="earnings" id="INPUT_8" />
            <input type="hidden" name="page" value="1" id="INPUT_9" />
            <div id="DIV_10" style="overflow:  hidden;">
                <table id="TABLE_11">
                    <tbody id="TBODY_12">
                    <tr id="TR_13">
                        <td id="TD_14">

                            <select name="type" id="SELECT_15">

                                <option id="OPTION_16">
                                    All transactions
                                </option>
                            </select><img src="img/inner_images/q.gif" width="1" height="4" id="IMG_17" alt='' />
                            <select name="ec" id="SELECT_18">

                                <option value="-1" id="OPTION_19">
                                    All eCurrencies
                                </option>
                                <option value="48" id="OPTION_20">
                                    Bitcoin
                                </option>
                            </select>
                        </td>
                        <td id="TD_21">
                            <span id="SPAN_22">From:</span>
                            <select name="month_from" id="SELECT_23">

                                <option value="1" id="OPTION_24">
                                    Jan
                                </option>
                                <option value="2" id="OPTION_25">
                                    Feb
                                </option>
                                <option value="3" id="OPTION_26">
                                    Mar
                                </option>
                                <option value="4" id="OPTION_27">
                                    Apr
                                </option>
                                <option value="5" id="OPTION_28">
                                    May
                                </option>
                                <option value="6" id="OPTION_29">
                                    Jun
                                </option>
                                <option value="7" id="OPTION_30">
                                    Jul
                                </option>
                                <option value="8" id="OPTION_31">
                                    Aug
                                </option>
                                <option value="9" id="OPTION_32">
                                    Sep
                                </option>
                                <option value="10" id="OPTION_33">
                                    Oct
                                </option>
                                <option value="11" id="OPTION_34">
                                    Nov
                                </option>
                                <option value="12" id="OPTION_35">
                                    Dec
                                </option>
                            </select>
                            <select name="day_from" id="SELECT_36">

                                <option value="1" id="OPTION_37">
                                    1
                                </option>
                                <option value="2" id="OPTION_38">
                                    2
                                </option>
                                <option value="3" id="OPTION_39">
                                    3
                                </option>
                                <option value="4" id="OPTION_40">
                                    4
                                </option>
                                <option value="5" id="OPTION_41">
                                    5
                                </option>
                                <option value="6" id="OPTION_42">
                                    6
                                </option>
                                <option value="7" id="OPTION_43">
                                    7
                                </option>
                                <option value="8" id="OPTION_44">
                                    8
                                </option>
                                <option value="9" id="OPTION_45">
                                    9
                                </option>
                                <option value="10" id="OPTION_46">
                                    10
                                </option>
                                <option value="11" id="OPTION_47">
                                    11
                                </option>
                                <option value="12" id="OPTION_48">
                                    12
                                </option>
                                <option value="13" id="OPTION_49">
                                    13
                                </option>
                                <option value="14" id="OPTION_50">
                                    14
                                </option>
                                <option value="15" id="OPTION_51">
                                    15
                                </option>
                                <option value="16" id="OPTION_52">
                                    16
                                </option>
                                <option value="17" id="OPTION_53">
                                    17
                                </option>
                                <option value="18" id="OPTION_54">
                                    18
                                </option>
                                <option value="19" id="OPTION_55">
                                    19
                                </option>
                                <option value="20" id="OPTION_56">
                                    20
                                </option>
                                <option value="21" id="OPTION_57">
                                    21
                                </option>
                                <option value="22" id="OPTION_58">
                                    22
                                </option>
                                <option value="23" id="OPTION_59">
                                    23
                                </option>
                                <option value="24" id="OPTION_60">
                                    24
                                </option>
                                <option value="25" id="OPTION_61">
                                    25
                                </option>
                                <option value="26" id="OPTION_62">
                                    26
                                </option>
                                <option value="27" id="OPTION_63">
                                    27
                                </option>
                                <option value="28" id="OPTION_64">
                                    28
                                </option>
                                <option value="29" id="OPTION_65">
                                    29
                                </option>
                                <option value="30" id="OPTION_66">
                                    30
                                </option>
                                <option value="31" id="OPTION_67">
                                    31
                                </option>
                            </select>
                            <select name="year_from" id="SELECT_68">

                                <option value="2017" id="OPTION_69">
                                    2017
                                </option>
                            </select>
                            <div>
                            <span id="SPAN_71">To:</span>
                            <select name="month_to" id="SELECT_72">

                                <option value="1" id="OPTION_73">
                                    Jan
                                </option>
                                <option value="2" id="OPTION_74">
                                    Feb
                                </option>
                                <option value="3" id="OPTION_75">
                                    Mar
                                </option>
                                <option value="4" id="OPTION_76">
                                    Apr
                                </option>
                                <option value="5" id="OPTION_77">
                                    May
                                </option>
                                <option value="6" id="OPTION_78">
                                    Jun
                                </option>
                                <option value="7" id="OPTION_79">
                                    Jul
                                </option>
                                <option value="8" id="OPTION_80">
                                    Aug
                                </option>
                                <option value="9" id="OPTION_81">
                                    Sep
                                </option>
                                <option value="10" id="OPTION_82">
                                    Oct
                                </option>
                                <option value="11" id="OPTION_83">
                                    Nov
                                </option>
                                <option value="12" id="OPTION_84">
                                    Dec
                                </option>
                            </select>
                            <select name="day_to" id="SELECT_85">

                                <option value="1" id="OPTION_86">
                                    1
                                </option>
                                <option value="2" id="OPTION_87">
                                    2
                                </option>
                                <option value="3" id="OPTION_88">
                                    3
                                </option>
                                <option value="4" id="OPTION_89">
                                    4
                                </option>
                                <option value="5" id="OPTION_90">
                                    5
                                </option>
                                <option value="6" id="OPTION_91">
                                    6
                                </option>
                                <option value="7" id="OPTION_92">
                                    7
                                </option>
                                <option value="8" id="OPTION_93">
                                    8
                                </option>
                                <option value="9" id="OPTION_94">
                                    9
                                </option>
                                <option value="10" id="OPTION_95">
                                    10
                                </option>
                                <option value="11" id="OPTION_96">
                                    11
                                </option>
                                <option value="12" id="OPTION_97">
                                    12
                                </option>
                                <option value="13" id="OPTION_98">
                                    13
                                </option>
                                <option value="14" id="OPTION_99">
                                    14
                                </option>
                                <option value="15" id="OPTION_100">
                                    15
                                </option>
                                <option value="16" id="OPTION_101">
                                    16
                                </option>
                                <option value="17" id="OPTION_102">
                                    17
                                </option>
                                <option value="18" id="OPTION_103">
                                    18
                                </option>
                                <option value="19" id="OPTION_104">
                                    19
                                </option>
                                <option value="20" id="OPTION_105">
                                    20
                                </option>
                                <option value="21" id="OPTION_106">
                                    21
                                </option>
                                <option value="22" id="OPTION_107">
                                    22
                                </option>
                                <option value="23" id="OPTION_108">
                                    23
                                </option>
                                <option value="24" id="OPTION_109">
                                    24
                                </option>
                                <option value="25" id="OPTION_110">
                                    25
                                </option>
                                <option value="26" id="OPTION_111">
                                    26
                                </option>
                                <option value="27" id="OPTION_112">
                                    27
                                </option>
                                <option value="28" id="OPTION_113">
                                    28
                                </option>
                                <option value="29" id="OPTION_114">
                                    29
                                </option>
                                <option value="30" id="OPTION_115">
                                    30
                                </option>
                                <option value="31" id="OPTION_116">
                                    31
                                </option>
                            </select>
                            <select name="year_to" id="SELECT_117">

                                <option value="2017" id="OPTION_118">
                                    2017
                                </option>
                            </select>
                                </div>
                        </td>
                        <td id="TD_119">
                            <input type="submit" value="Go" id="INPUT_120" />
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </form>
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
                            <td>Депозит/{{$deposit->deposit_type}}</td>
                            <td>{{$deposit->amount}}&nbsp;USD</td>
                            <td>{{$deposit->created_at->toFormattedDateString()}}</td>

                        </tr>


                    @endif
                @endforeach
            @else <th scope="row"> No transactions founded</th>
            @endif
            </tbody>
            <tbody>
            @if(count(Auth::user()->withdrawals))
                @foreach(Auth::user()->withdrawals as $withdraw)
                    <tr>
                        <th scope="row">{{$withdraw->id}}</th>
                        <td>Выплата/{{$withdraw->withdraw_type}}</td>
                        <td>{{$withdraw->amount}}&nbsp;USD</td>
                        <td>{{$withdraw->created_at->toFormattedDateString()}}</td>

                    </tr>



                @endforeach
            @else <th scope="row"> No transactions founded</th>
            @endif
            </tbody>
        </table>

    </div>
</div>
    </div>
    @endsection
