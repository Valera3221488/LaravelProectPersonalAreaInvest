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
            <form action="index.php" method="post" name="editform" id="FORM_13">
                <input type="hidden" name="a" value="edit_account" id="INPUT_14" />
                <input type="hidden" name="action" value="edit_account" id="INPUT_15" />
                <table id="TABLE_16">
                    <tbody id="TBODY_17">
                    <tr id="TR_18">
                        <td id="TD_19">
                            Account Name:
                        </td>
                        <td id="TD_20">
                            {{Auth::user()->name}}
                        </td>

                    </tr>
                    <tr id="TR_18">
                        <td id="TD_19">
                            Номер телефона:
                        </td>
                        <td id="TD_20">
                            {{Auth::user()->phone}}
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
                    <tr id="TR_24">
                        <td id="TD_25">
                            Your Full Name:
                        </td>
                        <td id="TD_26">
                            <input type="text" name="fullname" value="{{Auth::user()->name}}" id="INPUT_27" />
                        </td>
                    </tr>
                    <tr id="TR_28">
                        <td id="TD_29">
                            New Password:
                        </td>
                        <td id="TD_30">
                            <input type="text" name="password" id="INPUT_31"  value="NO LOGIC HERE"/>
                        </td>
                    </tr>
                    <tr id="TR_32">
                        <td id="TD_33">
                            Retype Password:
                        </td>
                        <td id="TD_34">
                            <input type="text" name="password2" id="INPUT_35" value="NO LOGIC HERE" />
                        </td>
                    </tr>
                    <tr id="TR_36">
                        <td id="TD_37">
                            Your PerfectMoney :
                        </td>
                        <td id="TD_38">
                            <input type="text" name="pay_account[18]" id="INPUT_39" value="NO LOGIC HERE"/>
                        </td>
                    </tr>
                    <tr id="TR_40">
                        <td id="TD_41">
                            Your Payeer :
                        </td>
                        <td id="TD_42">
                            <input type="text" name="pay_account[43]" id="INPUT_43"  value="NO LOGIC HERE"/>
                        </td>
                    </tr>
                    <tr id="TR_44">
                        <td id="TD_45">
                            Your AdvCash :
                        </td>
                        <td id="TD_46">
                            <input type="text" name="pay_account[56]" id="INPUT_47" value="NO LOGIC HERE"/>
                        </td>
                    </tr>
                    <tr id="TR_48">
                        <td id="TD_49">
                            Your Bitcoin :
                        </td>
                        <td id="TD_50">
                            <input type="text" name="pay_account[48]" id="INPUT_51" value="NO LOGIC HERE" />
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
                    <tr id="TR_55">
                        <td id="TD_56">
                        </td>
                        <td id="TD_57">
                            <input type="submit" value="Save changes" id="INPUT_58" />
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
</div>
    @endsection