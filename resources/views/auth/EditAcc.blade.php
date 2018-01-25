@extends('layouts.app')
@section('EditAccPageStyles')
    <link href="{{('/css/EditAcc.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
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
            <form method="post" action="/edit"   id="FORM_13" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                @if(Auth::check())
                <input type="hidden" name="id" value="{{Auth::user()->id}}"/>
                @endif
                <table id="TABLE_16">
                    <tbody id="TBODY_17">
                    <tr id="TR_24">
                        <td id="TD_25">
                            Ваше имя:
                        </td>
                        <td id="TD_26">
                            <input type="text" name="name" value="{{Auth::user()->name}}" id="INPUT_27" required/>
                        </td>
                    </tr>
                    <tr id="TR_18">
                        <td id="TD_19">
                            Номер телефона:
                        </td>
                        <td id="TD_20">
                            <input type="text" name="phone" value="{{Auth::user()->phone}}" id="INPUT_27" required />
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
                            <input type="text" name="email" id="INPUT_27" value="{{Auth::user()->email}}" required/>
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
                    </tbody>
                </table>
                <button type="submit" id="INPUT_58">Save changes</button>
            </form>
        </div>
        <div class="container" id="PasswordChangingZone" style="
    display:inline-block;
    width:454px;
    height:451px;
    background-color:#FAEBD7;
     ">
            <form  class="" method="post" action="/edit" enctype="multipart/form-data">
                <button type="submit" class="btn btn-primary" style="margin: 0px 0px -55px 24px;">Change Password</button>
            </form>
            <form  class="" method="post" action="/edit" enctype="multipart/form-data">
                <button type="submit" class="btn btn-primary" style="margin: 0px 0px 821px 273px">Reset Password</button>
            </form>
        </div>
    </div>
</div>
    @endsection