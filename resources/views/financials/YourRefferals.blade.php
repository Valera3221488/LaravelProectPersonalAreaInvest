@extends('layouts.app')
@section('YourRefferalsPageStyles')
    <link href="{{('/css/YourRefferals.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')
    <div id="DIV_1">
        <div id="DIV_2">
            <div id="DIV_3">
                <i id="I_4"></i> Referrals
            </div>
            <div id="DIV_5">
                Welcome, <span id="SPAN_6">{{ Auth::user()->name }}</span>!
            </div>
        </div>
        <div id="DIV_7">
            <div id="DIV_8">
                Total referral commission: BTC 0
            </div>


                Your upline is <a href="">Website name</a><br/> Referrals: 0<br/> Active referrals: 0


            <h3 id="H3_15">
                Referral ins/signups
            </h3><br id="BR_16" />
            <div id="DIV_17" style="overflow:  hidden;">
                <table id="TABLE_18">
                    <tbody id="TBODY_19">
                    <tr id="TR_20">
                        <form method="post" name="opts" id="FORM_21">
                        </form>
                        <input type="hidden" name="a" value="referals" id="INPUT_22" />
                        <td id="TD_23">
                            From:
                        </td>
                        <td id="TD_24">

                            <select name="month_from" id="SELECT_25">

                                <option value="1" id="OPTION_26">
                                    Jan
                                </option>
                                <option value="2" id="OPTION_27">
                                    Feb
                                </option>
                                <option value="3" id="OPTION_28">
                                    Mar
                                </option>
                                <option value="4" id="OPTION_29">
                                    Apr
                                </option>
                                <option value="5" id="OPTION_30">
                                    May
                                </option>
                                <option value="6" id="OPTION_31">
                                    Jun
                                </option>
                                <option value="7" id="OPTION_32">
                                    Jul
                                </option>
                                <option value="8" id="OPTION_33">
                                    Aug
                                </option>
                                <option value="9" id="OPTION_34">
                                    Sep
                                </option>
                                <option value="10" id="OPTION_35">
                                    Oct
                                </option>
                                <option value="11" id="OPTION_36">
                                    Nov
                                </option>
                                <option value="12" id="OPTION_37">
                                    Dec
                                </option>
                            </select>
                            <select name="day_from" id="SELECT_38">

                                <option value="1" id="OPTION_39">
                                    1
                                </option>
                                <option value="2" id="OPTION_40">
                                    2
                                </option>
                                <option value="3" id="OPTION_41">
                                    3
                                </option>
                                <option value="4" id="OPTION_42">
                                    4
                                </option>
                                <option value="5" id="OPTION_43">
                                    5
                                </option>
                                <option value="6" id="OPTION_44">
                                    6
                                </option>
                                <option value="7" id="OPTION_45">
                                    7
                                </option>
                                <option value="8" id="OPTION_46">
                                    8
                                </option>
                                <option value="9" id="OPTION_47">
                                    9
                                </option>
                                <option value="10" id="OPTION_48">
                                    10
                                </option>
                                <option value="11" id="OPTION_49">
                                    11
                                </option>
                                <option value="12" id="OPTION_50">
                                    12
                                </option>
                                <option value="13" id="OPTION_51">
                                    13
                                </option>
                                <option value="14" id="OPTION_52">
                                    14
                                </option>
                                <option value="15" id="OPTION_53">
                                    15
                                </option>
                                <option value="16" id="OPTION_54">
                                    16
                                </option>
                                <option value="17" id="OPTION_55">
                                    17
                                </option>
                                <option value="18" id="OPTION_56">
                                    18
                                </option>
                                <option value="19" id="OPTION_57">
                                    19
                                </option>
                                <option value="20" id="OPTION_58">
                                    20
                                </option>
                                <option value="21" id="OPTION_59">
                                    21
                                </option>
                                <option value="22" id="OPTION_60">
                                    22
                                </option>
                                <option value="23" id="OPTION_61">
                                    23
                                </option>
                                <option value="24" id="OPTION_62">
                                    24
                                </option>
                                <option value="25" id="OPTION_63">
                                    25
                                </option>
                                <option value="26" id="OPTION_64">
                                    26
                                </option>
                                <option value="27" id="OPTION_65">
                                    27
                                </option>
                                <option value="28" id="OPTION_66">
                                    28
                                </option>
                                <option value="29" id="OPTION_67">
                                    29
                                </option>
                                <option value="30" id="OPTION_68">
                                    30
                                </option>
                                <option value="31" id="OPTION_69">
                                    31
                                </option>
                            </select>
                            <select name="year_from" id="SELECT_70">

                                <option value="2017" id="OPTION_71">
                                    2017
                                </option>
                            </select>
                        </td>
                        <td id="TD_72">
                            To:
                        </td>
                        <td id="TD_73">
                            <select name="month_to" id="SELECT_74">

                                <option value="1" id="OPTION_75">
                                    Jan
                                </option>
                                <option value="2" id="OPTION_76">
                                    Feb
                                </option>
                                <option value="3" id="OPTION_77">
                                    Mar
                                </option>
                                <option value="4" id="OPTION_78">
                                    Apr
                                </option>
                                <option value="5" id="OPTION_79">
                                    May
                                </option>
                                <option value="6" id="OPTION_80">
                                    Jun
                                </option>
                                <option value="7" id="OPTION_81">
                                    Jul
                                </option>
                                <option value="8" id="OPTION_82">
                                    Aug
                                </option>
                                <option value="9" id="OPTION_83">
                                    Sep
                                </option>
                                <option value="10" id="OPTION_84">
                                    Oct
                                </option>
                                <option value="11" id="OPTION_85">
                                    Nov
                                </option>
                                <option value="12" id="OPTION_86">
                                    Dec
                                </option>
                            </select>
                            <select name="day_to" id="SELECT_87">

                                <option value="1" id="OPTION_88">
                                    1
                                </option>
                                <option value="2" id="OPTION_89">
                                    2
                                </option>
                                <option value="3" id="OPTION_90">
                                    3
                                </option>
                                <option value="4" id="OPTION_91">
                                    4
                                </option>
                                <option value="5" id="OPTION_92">
                                    5
                                </option>
                                <option value="6" id="OPTION_93">
                                    6
                                </option>
                                <option value="7" id="OPTION_94">
                                    7
                                </option>
                                <option value="8" id="OPTION_95">
                                    8
                                </option>
                                <option value="9" id="OPTION_96">
                                    9
                                </option>
                                <option value="10" id="OPTION_97">
                                    10
                                </option>
                                <option value="11" id="OPTION_98">
                                    11
                                </option>
                                <option value="12" id="OPTION_99">
                                    12
                                </option>
                                <option value="13" id="OPTION_100">
                                    13
                                </option>
                                <option value="14" id="OPTION_101">
                                    14
                                </option>
                                <option value="15" id="OPTION_102">
                                    15
                                </option>
                                <option value="16" id="OPTION_103">
                                    16
                                </option>
                                <option value="17" id="OPTION_104">
                                    17
                                </option>
                                <option value="18" id="OPTION_105">
                                    18
                                </option>
                                <option value="19" id="OPTION_106">
                                    19
                                </option>
                                <option value="20" id="OPTION_107">
                                    20
                                </option>
                                <option value="21" id="OPTION_108">
                                    21
                                </option>
                                <option value="22" id="OPTION_109">
                                    22
                                </option>
                                <option value="23" id="OPTION_110">
                                    23
                                </option>
                                <option value="24" id="OPTION_111">
                                    24
                                </option>
                                <option value="25" id="OPTION_112">
                                    25
                                </option>
                                <option value="26" id="OPTION_113">
                                    26
                                </option>
                                <option value="27" id="OPTION_114">
                                    27
                                </option>
                                <option value="28" id="OPTION_115">
                                    28
                                </option>
                                <option value="29" id="OPTION_116">
                                    29
                                </option>
                                <option value="30" id="OPTION_117">
                                    30
                                </option>
                                <option value="31" id="OPTION_118">
                                    31
                                </option>
                            </select>
                            <select name="year_to" id="SELECT_119">

                                <option value="2017" id="OPTION_120">
                                    2017
                                </option>
                            </select>
                        </td>
                        <td rowspan="2" id="TD_121">
                            <input type="submit" value="Go" id="INPUT_122" />
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><br id="BR_123" /><br id="BR_124" /><br id="BR_125" />
            <div id="DIV_126" style="overflow:  hidden;">
                <table id="TABLE_127">
                    <tbody id="TBODY_128">
                    <tr id="TR_129">
                        <td id="TD_130">
                            <b id="B_131">Date</b>
                        </td>
                        <td id="TD_132">
                            <b id="B_133">Ins</b>
                        </td>
                        <td id="TD_134">
                            <b id="B_135">Signups</b>
                        </td>
                    </tr>
                    <tr id="TR_136">
                        <td colspan="3" id="TD_137">
                            No statistics found for this period.
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><br id="BR_138" />
        </div>
    </div>
    @endsection