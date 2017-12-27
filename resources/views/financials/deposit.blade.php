@extends('layouts.app')
@section('DepositPageStyles')
    <link href="{{('/css/deposit.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@section('content')

    <div class="container" id="deposityakorb">
    <div id="DIV_1">
        <div id="DIV_2">
            <div id="DIV_3">
                <i id="I_4"></i> Make a deposit
            </div>
            <div id="DIV_5">
                Welcome, <span id="SPAN_6">{{ Auth::user()->name }}</span>!
            </div>
        </div>
        <div id="DIV_7" class="acc-wrap short">
            <form method="post" name="spendform" id="FORM_8" class="make_deposit">
                <input type="hidden" name="a" value="deposit" id="INPUT_9" />
                <input type="hidden" name="h_id" value="1" size="15" id="INPUT_10" />
                <div id="DIV_11" class="payment_method">
                    <div id="DIV_13">
                        <div id="DIV_14">
                            <div id="DIV_15">
                                From Wallet:
                            </div>
                        </div>
                        <div id="DIV_16" class="col-xs-12 col-sm-6 col-md-6 col-mobile">
                            <div id="DIV_17" class="payment-block PerfectMoney">
                                <div id="DIV_18">
                                </div> Wallet
                                <div id="DIV_19">
                                </div>
                            </div>
                        </div>
                        <div id="DIV_20" class="col-xs-12 col-sm-6 col-md-6 col-mobile">
                            <div id="DIV_21" class="payment-block Payeer">
                                <div id="DIV_22">
                                </div> Wallet
                                <div id="DIV_23">
                                </div>
                            </div>
                        </div>
                        <div id="DIV_24" class="col-xs-12 col-sm-6 col-md-6 col-mobile">
                            <div id="DIV_25" class="payment-block AdvCash">
                                <div id="DIV_26">
                                </div> Wallet
                                <div id="DIV_27">
                                </div>
                            </div>
                        </div>
                        <div id="DIV_28" class="col-xs-12 col-sm-6 col-md-6 col-mobile">
                            <div id="DIV_29" class="payment-block Bitcoin active">
                                <div id="DIV_30">
                                </div> Wallet
                                <div id="DIV_31">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="DIV_33" class="deposit_plans_wrap clearfix">
                    <div id="DIV_34">
                        Choose a plan:
                    </div>
                    <div id="DIV_35">
                    </div>
                    <div id="DIV_36" class="deplan-wrapper">
                        <span class="deplan" id="DIV_37">
                            <div id="DIV_38">
                            </div>
                            <div id="DIV_39">
                                casual
                            </div>
                            <div id="DIV_40">
                                <span id="SPAN_41">2.3%</span> <span id="SPAN_42">daily for 15 days</span>
                            </div>
                            <div id="DIV_43">
                                0.0050 BTC - 0.2500 BTC
                            </div>
                            <div id="DIV_44">
                                0.4 LTC - 20 LTC
                            </div>
                            <div id="DIV_45">
                                0.0625 ETH - 3.125 ETH
                            </div>
                            <div id="DIV_46">
                                20 USD - 1000 USD
                            </div>
                            <div id="DIV_47">
                                20 EUR - 1000 EUR
                            </div>
                            <div id="DIV_48">
                                Principal Back<br id="BR_49" /> Calendar Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_50">
                            <div id="DIV_51">
                            </div>
                            <div id="DIV_52">
                                <span id="SPAN_53">popular</span>
                            </div>
                            <div id="DIV_54">
                                optimal
                            </div>
                            <div id="DIV_55">
                                <span id="SPAN_56">2.6%</span> <span id="SPAN_57">daily for 25 days</span>
                            </div>
                            <div id="DIV_58">
                                0.2500 BTC - 2.5000 BTC
                            </div>
                            <div id="DIV_59">
                                20 LTC - 200 LTC
                            </div>
                            <div id="DIV_60">
                                3.125 ETH - 31.250 ETH
                            </div>
                            <div id="DIV_61">
                                1000 USD - 10000 USD
                            </div>
                            <div id="DIV_62">
                                1000 EUR - 10000 EUR
                            </div>
                            <div id="DIV_63">
                                Principal Back<br id="BR_64" /> Calendar Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_65">
                            <div id="DIV_66">
                            </div>
                            <div id="DIV_67">
                                ultimate
                            </div>
                            <div id="DIV_68">
                                <span id="SPAN_69">0.13%</span> <span id="SPAN_70">hourly for 1440 hours</span>
                            </div>
                            <div id="DIV_71">
                                2.5000 BTC - 25.0000 BTC
                            </div>
                            <div id="DIV_72">
                                200 LTC - 2000 LTC
                            </div>
                            <div id="DIV_73">
                                31.250 ETH - 312.500 ETH
                            </div>
                            <div id="DIV_74">
                                10000 USD - 100000 USD
                            </div>
                            <div id="DIV_75">
                                10000 EUR - 100000 EUR
                            </div>
                            <div id="DIV_76">
                                Principal Back<br id="BR_77" /> Calendar Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_78">
                            <div id="DIV_79">
                            </div>
                            <div id="DIV_80">
                                <span id="SPAN_81">recomended</span>
                            </div>
                            <div id="DIV_82">
                                deluxe
                            </div>
                            <div id="DIV_83">
                                <span id="SPAN_84">155%</span> <span id="SPAN_85">after 15 days</span>
                            </div>
                            <div id="DIV_86">
                                0.0250 BTC - 1.2500 BTC
                            </div>
                            <div id="DIV_87">
                                2 LTC - 100 LTC
                            </div>
                            <div id="DIV_88">
                                0.3125 ETH - 15.625 ETH
                            </div>
                            <div id="DIV_89">
                                100 USD - 5000 USD
                            </div>
                            <div id="DIV_90">
                                100 EUR - 5000 EUR
                            </div>
                            <div id="DIV_91">
                                Principal included<br id="BR_92" /> Business Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_93">
                            <div id="DIV_94">
                            </div>
                            <div id="DIV_95">
                                Professional
                            </div>
                            <div id="DIV_96">
                                <span id="SPAN_97">1200%</span> <span id="SPAN_98">after 60 days</span>
                            </div>
                            <div id="DIV_99">
                                1.0000 BTC - 10.0000 BTC
                            </div>
                            <div id="DIV_100">
                                80 LTC - 800 LTC
                            </div>
                            <div id="DIV_101">
                                12.500 ETH - 125.000 ETH
                            </div>
                            <div id="DIV_102">
                                4000 USD - 40000 USD
                            </div>
                            <div id="DIV_103">
                                4000 EUR - 40000 EUR
                            </div>
                            <div id="DIV_104">
                                Principal included<br id="BR_105" /> Business Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_106">
                            <div id="DIV_107">
                            </div>
                            <div id="DIV_108">
                                <span id="SPAN_109">people choice</span>
                            </div>
                            <div id="DIV_110">
                                Premium
                            </div>
                            <div id="DIV_111">
                                <span id="SPAN_112">7000%</span> <span id="SPAN_113">after 100 days</span>
                            </div>
                            <div id="DIV_114">
                                0.0500 BTC - 5.0000 BTC
                            </div>
                            <div id="DIV_115">
                                4 LTC - 400 LTC
                            </div>
                            <div id="DIV_116">
                                0.625 ETH - 62.500 ETH
                            </div>
                            <div id="DIV_117">
                                200 USD - 20000 USD
                            </div>
                            <div id="DIV_118">
                                200 EUR - 20000 EUR
                            </div>
                            <div id="DIV_119">
                                Principal included<br id="BR_120" /> Business Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_121">
                            <div id="DIV_122">
                            </div>
                            <div id="DIV_123">
                                vip
                            </div>
                            <div id="DIV_124">
                                <span id="SPAN_125">550%</span> <span id="SPAN_126">after 20 days</span>
                            </div>
                            <div id="DIV_127">
                                5.0000 BTC - 12.5000 BTC
                            </div>
                            <div id="DIV_128">
                                400 LTC - 1000 LTC
                            </div>
                            <div id="DIV_129">
                                62.500 ETH - 156.250 ETH
                            </div>
                            <div id="DIV_130">
                                20000 USD - 50000 USD
                            </div>
                            <div id="DIV_131">
                                20000 EUR - 50000 EUR
                            </div>
                            <div id="DIV_132">
                                Principal included<br id="BR_133" /> Business Days
                            </div>
                        </span>
                        <span class="deplan" id="DIV_134">
                            <div id="DIV_135">
                            </div>
                            <div id="DIV_136">
                                Luxury
                            </div>
                            <div id="DIV_137">
                                <span id="SPAN_138">1700%</span> <span id="SPAN_139">after 40 days</span>
                            </div>
                            <div id="DIV_140">
                                2.5000 BTC - 10.0000 BTC
                            </div>
                            <div id="DIV_141">
                                200 LTC - 800 LTC
                            </div>
                            <div id="DIV_142">
                                31.250 ETH - 125.000 ETH
                            </div>
                            <div id="DIV_143">
                                10000 USD - 40000 USD
                            </div>
                            <div id="DIV_144">
                                10000 EUR - 40000 EUR
                            </div>
                            <div id="DIV_145">
                                Principal included<br id="BR_146" /> Business Days
                            </div>
                        </span>
                    </div>
                    <div id="DIV_147">
                    </div>
                    <div id="DIV_148">
                        Enter an amount:
                    </div>
                    <div id="DIV_149">
                    </div>
                    <div id="DIV_150">
                        <div id="DIV_151">
                        </div>
                        <span class="standartbutton">
                            0.01
                        </span>
                        <span class="standartbutton">
                            0.05
                        </span>
                        <span class="standartbutton">
                            0.1
                        </span>
                        <span class="standartbutton">
                            0.5
                        </span>
                        <span class="standartbutton">
                            1
                        </span>
                        <span class="standartbutton">
                            5
                        </span>
                        <span class="standartbutton">
                            10
                        </span>
                        <span class="standartbutton">
                            20
                        </span>
                        <span class="standartbutton">
                            50
                        </span>
                    </div>
                    <div id="DIV_161">
                        <div id="DIV_162">
                        </div>
                        <div id="DIV_163">
                            1
                        </div>
                        <div id="DIV_164">
                            5
                        </div>
                        <div id="DIV_165">
                            10
                        </div>
                        <div id="DIV_166">
                            50
                        </div>
                        <div id="DIV_167">
                            100
                        </div>
                        <div id="DIV_168">
                            500
                        </div>
                        <div id="DIV_169">
                            1000
                        </div>
                        <div id="DIV_170">
                            2000
                        </div>
                        <div id="DIV_171">
                            5000
                        </div>
                    </div>
                    <div id="DIV_172">
                        <div id="DIV_173">
                        </div>
                        <div id="DIV_174">
                            0.2
                        </div>
                        <div id="DIV_175">
                            1
                        </div>
                        <div id="DIV_176">
                            2
                        </div>
                        <div id="DIV_177">
                            10
                        </div>
                        <div id="DIV_178">
                            20
                        </div>
                        <div id="DIV_179">
                            100
                        </div>
                        <div id="DIV_180">
                            200
                        </div>
                        <div id="DIV_181">
                            500
                        </div>
                        <div id="DIV_182">
                            1000
                        </div>
                    </div>
                    <div id="DIV_183">
                        <div id="DIV_184">
                        </div>
                        <div id="DIV_185">
                            50
                        </div>
                        <div id="DIV_186">
                            250
                        </div>
                        <div id="DIV_187">
                            500
                        </div>
                        <div id="DIV_188">
                            2500
                        </div>
                        <div id="DIV_189">
                            5000
                        </div>
                        <div id="DIV_190">
                            25000
                        </div>
                        <div id="DIV_191">
                            50000
                        </div>
                        <div id="DIV_192">
                            100000
                        </div>
                        <div id="DIV_193">
                            250000
                        </div>
                    </div>
                    <div id="DIV_194">
                        <div id="DIV_195">
                        </div>
                        <div id="DIV_196">
                            50
                        </div>
                        <div id="DIV_197">
                            250
                        </div>
                        <div id="DIV_198">
                            500
                        </div>
                        <div id="DIV_199">
                            2500
                        </div>
                        <div id="DIV_200">
                            5000
                        </div>
                        <div id="DIV_201">
                            25000
                        </div>
                        <div id="DIV_202">
                            50000
                        </div>
                        <div id="DIV_203">
                            100000
                        </div>
                        <div id="DIV_204">
                            250000
                        </div>
                    </div>
                    <div id="DIV_205">
                    </div>
                    <input type="hidden" name="type" value="process_48" size="15" id="INPUT_206" />
                    <div id="DIV_207">
                        <div id="DIV_208">
                            <div id="DIV_209">
                                <input id="INPUT_210" type="text" name="amount-btc" value="0.1" />
                                <input id="INPUT_211" type="hidden" name="amount" value="400" />
                                <input id="INPUT_212" type="hidden" value="4000" />
                            </div>

                            <input type="submit" value="invest" id="INPUT_213" />

                        </div>
                    </div>
                </div>
            </form>
            <div id="DIV_214">

                <div id="DIV_215">
                    <div id="DIV_216">

                        <label id="LABEL_217">
                            Daily profit:
                        </label>
                        <div id="DIV_218">
                            <span id="SPAN_219">0.00230000</span> <span id="SPAN_220">BTC</span>
                        </div>
                    </div>
                </div>
                <div id="DIV_221">
                    <div id="DIV_222">

                        <label id="LABEL_223">
                            Total return:
                        </label>
                        <div id="DIV_224">
                            <span id="SPAN_225">0.13450000</span> <span id="SPAN_226">BTC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('DepositPageScripts')
     <script type="text/javascript" src=     "{{ asset('js/DepositPage/deposit.js') }}"    ></script>
     <script src=                            "{{ asset('js/app.js') }}"                    ></script>
     <script type="text/javascript" src=     "{{ asset('BITZJS')}}"                        ></script>
    @endsection