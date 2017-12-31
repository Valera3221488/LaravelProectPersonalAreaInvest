@extends('layouts.app')
@section('EditAccPageStyles')
    <link href="{{('/css/EditAcc.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')
<div class="container">
    <div id="DIV_1">
        <div id="DIV_2">
            <div id="DIV_3">
                <i id="I_4"></i> Edit account
            </div>
            <div id="DIV_5">
                Welcome, <span id="SPAN_6">{{ Auth::user()->name }}</span>!
            </div>
        </div>
        <div id="DIV_7">
            <script id="SCRIPT_12">function IsNumeric(sText) {
                    var ValidChars = "0123456789.";
                    var IsNumber = true;
                    var Char;
                    if (sText == '') return false;
                    for (i = 0; i < sText.length && IsNumber == true; i++) {
                        Char = sText.charAt(i);
                        if (ValidChars.indexOf(Char) == -1) {
                            IsNumber = false;
                        }
                    }
                    return IsNumber;
                }

                function checkform() {
                    if (document.editform.fullname.value == '') {
                        alert("Please type your full name!");
                        document.editform.fullname.focus();
                        return false;
                    }


                    if (document.editform.password.value != document.editform.password2.value) {
                        alert("Please check your password!");
                        document.editform.fullname.focus();
                        return false;
                    }




                    return true;
                }
            </script>
            <form method="post" action="/edit"   id="FORM_13" enctype="multipart/form-data">

                                        {{ csrf_field() }}

                <input type="hidden" name="a" value="edit_account" id="INPUT_14" />
                <input type="hidden" name="action" value="edit_account" id="INPUT_15" />
                <table id="TABLE_16">
                    <tbody id="TBODY_17">
                    <tr id="TR_24">
                        <td id="TD_25">
                            Ваше имя:
                        </td>
                        <td id="TD_26">
                            <input type="text" name="name" value="{{Auth::user()->name}}" id="INPUT_27" />
                        </td>
                    </tr>
                    <tr id="TR_18">
                        <td id="TD_19">
                            Номер телефона:
                        </td>
                        <td id="TD_20">
                            <input type="text" name="phone" value="{{Auth::user()->phone}}" id="INPUT_27"/>
                        </td>
                    </tr>


                    <tr id="TR_28">
                        <td id="TD_29">
                            New Password:
                        </td>
                        <td id="TD_30">
                            <input type="text" name="password" id="INPUT_31"  value=""/>
                        </td>
                    </tr>
                    <tr id="TR_36">
                        <td id="TD_37">
                            Your PerfectMoney :
                        </td>
                        <td id="TD_38">
                            <input type="text" name="PerfectMoneyAcc" id="INPUT_39" value="{{Auth::user()->PerfectMoneyAcc}}"/>
                        </td>
                    </tr>
                    <tr id="TR_44">
                        <td id="TD_45">
                            Your WebMoney :
                        </td>
                        <td id="TD_46">
                            <input type="text" name="WebMoneyAcc" id="INPUT_47" value="{{Auth::user()->WebMoneyAcc}}"/>
                        </td>
                    </tr>
                    <tr id="TR_36">
                        <td id="TD_37">
                            Your AdvCash :
                        </td>
                        <td id="TD_38">
                            <input type="text" name="AdvCashAcc" id="INPUT_39" value="{{Auth::user()->AdvCashAcc}}"/>
                        </td>
                    </tr>
                    <tr id="TR_52">
                        <td id="TD_53">
                            Your E-mail address:
                        </td>
                        <td id="TD_54">
                            {{Auth::user()->email}}
                        </td>
                    </tr>
                    <tr id="TR_21">
                        <td id="TD_22">
                            Registration date:
                        </td>
                        <td id="TD_23">
                            {{Auth::user()->created_at->toFormattedDateString() }}
                        </td>
                    </tr>
                    <tr id="TR_55">
                        <td id="TD_56">
                        </td>
                        <td id="TD_57">
                            <button type="submit" id="INPUT_58">Save changes</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
</div>
    @endsection