$(document).ready(function(){



// ========================================================================= CALCULATE DEPOSIT PLANS
    function calculateDepositPlans() {
        var to_fixed = 8;
        var currency_payment = parseInt($('.payment-block.active').data('payment'));
        var currenct_name = 'BTC';
        if(!currency_payment){
            currency_payment=48
        }

        if(currency_payment==48){
            currenct_name = 'BTC';
            to_fixed=8;
        }
        else if(currency_payment==68){
            currenct_name = 'LTC';
            to_fixed=2;
        }
        else if(currency_payment==69){
            currenct_name = 'ETH';
            to_fixed=2;
        }
        else {
            currenct_name = 'USD';
            to_fixed=2;
        }

        var planPercent = $('.deplan.active').data('value'),
            planDays = $('.deplan.active').data('days'),
            plan = $('.deplan.active').data('plan');


        var amount = $('#amount-input-btc').val();

        if(plan <= 2) {
            var totalProfit = (parseFloat(amount) + parseFloat(planPercent) / 100 * parseFloat(amount) * planDays).toFixed(to_fixed);
            var dailyProfit = (parseFloat(planPercent) / 100 * parseFloat(amount) * 1).toFixed(to_fixed);
        }
        else if(plan == 3){
            var totalProfit = (parseFloat(amount) + parseFloat(planPercent) / 100 * parseFloat(amount) * planDays).toFixed(to_fixed);
            var dailyProfit = (parseFloat(planPercent) / 100 * parseFloat(amount) * 1).toFixed(to_fixed);
        }
        else if(plan >= 4){
            var totalProfit = (parseFloat(planPercent) / 100 * parseFloat(amount)).toFixed(to_fixed);
            var dailyProfit = "<small>ON COMPLETION</small>";
        }

        if (!$('#amount-input-btc').val()){
            $('#deposit-percent-in').text('');
            $('#deposit-total-in').text('');
            $('.count_box_currency').text('');
            $('.count_box_currency_total').text('');
        }
        else {
            $('#deposit-percent-in').html(dailyProfit);
            if (totalProfit) {
                $('#deposit-total-in').text(totalProfit);
            }
            if(plan <= 3) {
                $('.count_box_currency').text(currenct_name);
            }
            else{
                $('.count_box_currency').text('');
            }
            $('.count_box_currency_total').text(currenct_name);
        }
    }

    // ========================================================================= PLANS
    $('.payment-block').click(function(){
        $('.payment-block').removeClass('active');
        $(this).addClass('active');
        $('.ps-insert').val($(this).attr('data-id'));

        var planID= $(this).attr('data-payment');
        var exchange = 4000;

        if(planID==48) exchange = 4000;
        else if(planID==68) exchange = 50;
        else if(planID==69) exchange = 320;
        else exchange = 1;
        $('#exchange').val(exchange);

        $('.dp-summs').removeClass('active');
        $('.dp-summs.payment-'+planID).addClass('active');

        /* THIS SELECT FOR MINIMAL PLAN */
        /*var minimumValue = $('.deplan.active').data('minimum');
        var minimumValueExchange = $('.deplan.active').data('minimum')/exchange;*/

        /* THIS SELECT FOR POPLULAR PLAN */
        $('.amount-block').removeClass('active');
        $('.amount-block.payment-'+planID).addClass('active');
        $('.amount-block .amount-btn').removeClass(('active'));

        var reinvestBtn = $(this).find('.ups-bal > span').html();
        if(reinvestBtn){
            $('#amount-input-btc').val(reinvestBtn);
            $('#amount-input').val(reinvestBtn*exchange);
        }
        else{
            var plan = $('.deplan.active').data('plan');
            if(plan===1 || plan===4 || plan=== 6){
                $('.amount-block.active .amount-btn.popular-amount').addClass(('active'));
                var minimumValue = $('.amount-btn.active').data('value');
                var minimumValueExchange = $('.amount-btn.active').data('value')*exchange;

                $('#amount-input-btc').val(minimumValue);
                $('#amount-input').val(minimumValueExchange);
            }
            else{
                var minimumValue = $('.deplan.active').data('minimum');
                var minimumValueExchange = $('.deplan.active').data('minimum')/exchange;

                $('#amount-input-btc').val(minimumValueExchange);
                $('#amount-input').val(minimumValue);
            }
        }

        $('.choose-method-inpt').attr('data-payment', planID);

        setTimeout(function () {
            calculateDepositPlans();
        }, 50);
    });

    $('.deplan').click(function(){
        $('.deplan').removeClass('active');
        $(this).addClass('active');
        $('.pl-insert').val($(this).attr('data-id'));
        var exchange = $('#exchange').val();

        /* THIS SELECT FOR MINIMAL PLAN */
        /*var minimumValue = $('.deplan.active').data('minimum');
        var minimumValueExchange = $('.deplan.active').data('minimum')/exchange;*/

        /* THIS SELECT FOR POPLULAR PLAN */
        $('.amount-block .amount-btn').removeClass(('active'));

        var plan = $(this).data('plan');
        if(plan===1 || plan===4 || plan=== 6){
            $('.amount-block.active .amount-btn.popular-amount').addClass(('active'));
            var minimumValue = $('.amount-btn.active').data('value');
            var minimumValueExchange = $('.amount-btn.active').data('value')*exchange;

            $('#amount-input-btc').val(minimumValue);
            $('#amount-input').val(minimumValueExchange);
        }
        else{
            var minimumValue =  $(this).data('minimum');
            var minimumValueExchange =  $(this).data('minimum')/exchange;

            $('#amount-input-btc').val(minimumValueExchange);
            $('#amount-input').val(minimumValue);
        }


        setTimeout(function () {
            calculateDepositPlans();
        }, 50);

    });

    $('.withdraw-block').click(function(){
        $('.withdraw-block').removeClass('active');
        $(this).addClass('active');

        var paymentID= $(this).attr('data-payment');
        $('#ec').val(paymentID);
        var exchange = 4000;

        if(paymentID==48) exchange = 4000;
        else if(paymentID==68) exchange = 50;
        else if(paymentID==69) exchange = 320;
        else exchange = 1;
        $('#exchange').val(exchange);

        var minimumWithdraw = 20;
        if(paymentID==48) minimumWithdraw = 8000;
        else minimumWithdraw = 1;

        var minimumWithdrawExchange = minimumWithdraw/exchange;

        var reinvestBtn = $(this).find('.ups-bal > span').html();
        if(reinvestBtn){
            $('#amount-btc').val(reinvestBtn);
            $('#amount').val(reinvestBtn*exchange);
        }
        else{
            $('#amount-btc').val(minimumWithdrawExchange);
            $('#amount').val(minimumWithdraw);
        }

        $('.choose-method-inpt').attr('data-payment', paymentID);
        $('.withdraw-method-input').attr('data-payment', paymentID);
    });

    $('.ups-col').click(function(){
        $('.ups-col').removeClass('active');
        $(this).addClass('active');
        $('.ps-insert').val($(this).attr('data-id'));
    });


    /*
    $('.plan').on('click', function() {
        $(this).addClass('plan-active').siblings().removeClass('plan-active')
        .parents().siblings('ul').children('.plan').removeClass('plan-active');
        $('.plan-info').eq($(this).data('plan')).removeAttr('hidden').siblings()
        .attr('hidden', 'hidden');
        console.log($(this).data('plan'));
    });
    $('.choose').on('click', function() {
        $(this).parent('.deposit_plan').addClass('deposit-plan-checked').siblings().removeClass('deposit-plan-checked');
    });

    $('.deposit_plan').on('click', function() {
        $(this).addClass('deposit-plan-checked').siblings().removeClass('deposit-plan-checked');
        //$('.deposit_plan input').attr('checked', 'checked');
    });*/

    // ========================================================================= CABINET AMOUNT BUTTONS
    $(function () {
        $('#amount-input-btc').on('input', function () {
            replaceComma(this);
            var exchange = $('#exchange').val();
            var value = $(this).val()*exchange;
            $('#amount-input').val(value);
            setTimeout(function () {
                calculateDepositPlans();
            }, 50);
        });
    });

    $('.amount-block .amount-btn').on('click', function(){
        var selectValueBtc = $(this).data('value');
        var exchange = $('#exchange').val();
        var selectValue = $(this).data('value')*exchange;
        $('.amount-block .amount-btn').removeClass(('active'));
        $(this).addClass(('active'));

        $('#amount-input-btc').val(selectValueBtc);
        $('#amount-input').val(selectValue);

        setTimeout(function () {
            calculateDepositPlans();
        }, 50);
    });

    // ========================================================================= CABINET WITHDRAW INPUT
    $(function () {
        $('#amount-btc').on('input', function () {
            replaceComma(this);
            var exchange = $('#exchange').val();
            var value = $(this).val()*exchange;
            $('#amount').val(value);
            setTimeout(function () {
                calculateDepositPlans();
            }, 50);
        });
    });


    // ========================================================================= VIDEO-REVIEWS CAROUSEL SLICK
    if($('#reviews-carousel').length) {
        $('#reviews-carousel').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 900,
            centerMode: false,
            variableWidth: true,
            centerPadding: '0px',
            slidesToScroll: 2,
            slidesToShow: 2,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        variableWidth: false,
                        centerMode: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: false,
                        centerMode: false
                    }
                }
            ]
        });
    }
    // ========================================================================= PLANS CAROUSEL SLICK
    if($('#plan-carousel').length) {
        $('#plan-carousel').slick({
            swipeToSlide: true,
            dots: false,
            arrows: true,
            infinite: true,
            speed: 900,
            centerMode: false,
            variableWidth: true,
            centerPadding: '0px',
            slidesToScroll: 1,
            slidesToShow: 5,
            focusOnSelect: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        centerMode: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        variableWidth: false,
                        centerMode: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        variableWidth: false,
                        centerMode: false
                    }
                },
                {
                    breakpoint: 365,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        variableWidth: false,
                        centerMode: false
                    }
                }
            ]
        });
    }

    // ========================================================================= BTN COPY REFERRAL
    var currentLang = $('html').attr('lang');
    var copyTextareaBtn = $('.js-textareacopybtn');

    copyTextareaBtn.on('click', function(event) {
        if(currentLang == 'ru'){
            $(this).text('Скопировано');
        }
        else {
            $(this).text('Copied');
        }
        var copyTextarea = $(this).closest('.refs_item').find('.js-copytextarea');
        copyTextarea.select();
        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
        } catch (err) {}

        var that = this;
        setTimeout(function () {
            if(currentLang == 'ru'){
                $(that).text('Копировать');
            }
            else {
                $(that).text('Copy');
            }
        }, 2000);
    });

    var copyReferralBtn = $('.js-inputcopybtn');

    copyReferralBtn.on('click', function(event) {
        if(currentLang == 'ru'){
            $(this).text('Скопировано');
        }
        else {
            $(this).text('Copied');
        }
        var copyTextarea = $(this).closest('.referral_home_item').find('.js-copyinput');
        copyTextarea.select();
        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
        } catch (err) {}

        var that = this;
        setTimeout(function () {
            if(currentLang == 'ru'){
                $(that).text('Копировать');
            }
            else {
                $(that).text('Copy');
            }
        }, 2000);
    });

    // ========================================================================= MARQUEE PRESS
    if($('.marquee').length) {
        $('.marquee').liMarquee({
            drag: false
        });
    };

    // ========================================================================= FAQ SECTION
    if($('.faq-tab').length) {
        $(".faq-tab .answer").hide();
        $(document).on('click', '.faq-tab > li > h4', function () {
            if($(this).parent().hasClass('active')){
                $(this).parent().find(".answer").slideUp();
                $(this).parent().removeClass("active");
            }
            else{
                $(this).parent().find(".answer").slideDown();
                $(this).parent().addClass("active");
            }
        });
    };

// ========================================================================= PARALLAX HOMEPAGE
    var counter=0;
    var countSlidess = $('.js-paralax_zone').length;
    //console.log("TOTAL SLIDES: "+countSlidess+"\n");

    if($('.parallax-slider').length) {
        function parallaxIgniter(count) {
            var prlx = [];
            for (var i = count; i >= 1; i--) {
                var scene = document.getElementById('scene_' + i);
                prlx[i] = new Parallax(scene);
            }
        }
        function parallaxRandomizer(countSlidess, currentNumber) {
            // console.log("CURRENT SLIDE: "+currentNumber+"\n");

            var currentUl = $('.banner_none.js-banner_' + currentNumber);
            if (currentUl.data('bgheader') != undefined) {
                var bgImg = currentUl.data('bgheader');
                if (counter != 0) {
                    $('.parallax-background').animate({
                        opacity: "0"
                    }, 800, "linear", function () {
                        $('.parallax-background').css('background-image', 'url(' + bgImg + ')');
                        $('.parallax-background').animate({
                            opacity: "1"
                        }, 800, "linear", function () {

                        });
                    });
                }
                else {
                    //$('.parallax-background').css('background-image', 'url("img/helloween/background.jpg")');
                }
            }

            var previousNumber;
            if (currentNumber == countSlidess) {
                previousNumber = 1;
            } else {
                previousNumber = currentNumber + 1;
            }
            //console.log("PREVIOUS NUMBER: "+previousNumber+"\n");
            $('.banner_none.js-banner_' + previousNumber).animate({
                opacity: "0"
            }, 800, "linear", function () {
                $('.banner_none.js-banner_' + previousNumber).hide();
                // this reset bar width to 0
                if ($('.js-progress-bar-fill').length) {
                    $('.js-progress-bar-fill').hide().animate({
                        width: '0%'
                    }, 10);
                }
            });
            currentUl.delay(800).show('fast').animate({
                opacity: "1"
            }, 1000, "linear", function () {
                if ($('.js-progress-bar-fill').length) {
                    $('.js-progress-bar-fill').show().animate({
                        width: '100%'
                    }, 8500);
                }
            });
            counter++;
        }
        if ($('.js-paralax_zone ').length) {
            var mainPageParalaxLiLoop;
            if($('.js-paralax_zone ').length == 1){
                // runs when only one slide is available
                var id = $('.js-paralax_zone ').attr('id'),
                    scene = document.getElementById(id),
                    parallax = new Parallax(scene);
                scene.style.display = 'block';
                scene.style.opacity = '1';

            }else if($('.js-paralax_zone ').length > 1){
                // runs when more than one slider is on dom
                var currentNumber = countSlidess;
                parallaxIgniter(countSlidess);
                parallaxRandomizer(countSlidess, currentNumber);

                mainPageParalaxLiLoop = setInterval(function () {
                    currentNumber--;
                    if (currentNumber == 0) {
                        currentNumber = countSlidess;
                    }
                    parallaxRandomizer(countSlidess, currentNumber);
                }, 12000);

                /* $('#parallax-nav a').on('click', function () {
                     clearInterval(mainPageParalaxLiLoop);
                     mainPageParalaxLiLoop = setInterval(function () {
                         randomNumber++;
                         parallaxRandomizer(countSlidess, randomNumber);
                         if (randomNumber == countSlidess) {
                             randomNumber = 0;
                         }
                     }, 12000);
                 });*/

                /*if ($('.js-stop-loop').length) {
                    $('.js-stop-loop').on('click', function () {
                        clearInterval(mainPageParalaxLiLoop);
                    });
                }      */
            }
        }
    };

// ========================================================================= MENU CABINET
    $(function () {
        $('#navbar a').each(function () {
            var location = window.location.href;
            var link = this.href;
            if(location == link) {
                $(this).addClass('active');
            }
        });
        $('footer nav a').each(function () {
            var location = window.location.href;
            var link = this.href;
            if(location == link) {
                $(this).addClass('active');
            }
        });
    });

// ========================================================================= PROMOTIONS CABINET
    $('.btn-banner').on('click', function () {
        $(".btn-banner").removeClass('active');
        $(this).addClass('active');

        var banner_category = $(this).data('banner');
        $(".banner-tab").css('display', 'none');
        $("#" + banner_category).css('display', 'block');
    });



// ========================================================================= AUTHORIZATION HELPERS
    $(".auth-form input").blur(function () {
        $(".helper").removeClass('isActive');
    });

    $(".auth-form .form-control").on('click', function () {
        if($(this).hasClass('with_helper')) {
            $(this).closest('div').find('.helper').addClass('isActive');
        }
    });

    $(".auth-form input[type=checkbox]").on('click', function () {
        if($(this).hasClass('with_helper')) {
            $(this).closest('div').find('.helper').addClass('isActive');
        }
    });

    // ========================================================================= MENU HEADER
    $(function () {
        $('.bottom-menu li a').each(function () {
            var location = window.location.href;
            var link = this.href;
            if(location == link) {
                $(this).parent('li').addClass('active');
            }
        });

        $('.popup-top-menu li a').each(function () {
            var location = window.location.href;
            var link = this.href;
            if(location == link) {
                $(this).addClass('active');
            }
        });
    });

    // =========================================================================  popup head-menu

    $('body').on('click', ' .mobileMenu', function() {
        var navMenu = $(this).parent('.mobile');
        if($(navMenu).hasClass('active')){
            $(navMenu).removeClass('active');
        }
        else {
            $(navMenu).addClass('active');
        }
        return false;
    });
    $('body').on('click', '.mobile .popupCloseButton', function() {
        var navMenu = $(this).parent().parent().parent('.mobile');
        if($(navMenu).hasClass('active')){
            $(navMenu).removeClass('active');
        }
        return false;
    });

    $(document).click(function(event) {
        if ( !$(event.target).parent().hasClass('popupContainer')) {
            $('.mobile').removeClass('active');
        }
    });

    // =========================================================================  popup select language
    $(function () {
        $('body').on('click', '.language-href', function() {
            var navMenu = $(this).parent('.select-language');
            if($(navMenu).hasClass('active')){
                $(navMenu).removeClass('active');
            }
            else {
                $(navMenu).addClass('active');
            }
            return false;
        });

    });
    $(document).click(function(event) {
        if ( !$(event.target).hasClass('language-tab')) {
            $('.select-language').removeClass('active');
        }
    });

    // ========================================================================= HEADER NAVIGATION TAB
    $(function () {
        $('body').on('click', '.user-navigation h2', function () {
            if($(this).parent().hasClass('active')){
                $(this).parent().removeClass("active");
            }
            else{
                $(this).parent().addClass("active");
            }
        });
    });

    // ========================================================================= INVESTMENT TAB
    var count_plans=false;
    $(".show-plans").click(function (e) {
        e.stopPropagation();
        if (!count_plans) {
            $(".investment").css('height', 'auto').css('overflow', 'inherit').css('display', 'none').slideDown('slow');
            $(".show-plans").addClass('active');
            count_plans++;
        }
        else {
            $(this).toggleClass('active');
            $(".investment").slideToggle("slow");
        }
    });

    $(function () {
        $('body').on('click', '.plan-href', function() {
            var navMenu = $(this).parent('.select-plan');
            if($(navMenu).hasClass('active')){
                $(navMenu).removeClass('active');
            }
            else {
                $(navMenu).addClass('active');
            }
            return false;
        });

    });
    $(document).click(function(event) {
        if ( !$(event.target).hasClass('plan-tab')) {
            $('.select-plan').removeClass('active');
        }
    });




    $(function () {
        $('body').on('click', '.currency-href', function() {
            var currencyMenu = $(this).parent('.select-currency');
            if($(currencyMenu).hasClass('active')){
                $(currencyMenu).removeClass('active');
            }
            else {
                $(currencyMenu).addClass('active');
            }
            return false;
        });

    });
    $(document).click(function(event) {
        if ( !$(event.target).hasClass('currency-tab')) {
            $('.select-currency').removeClass('active');
        }
    });

    // ========================================================================= POPUP
    /* function show_popup(popup_name) {
         $('#'+popup_name).fadeIn();
         q_width = $('#'+popup_name).outerWidth()/-2;
         q_height = $('#'+popup_name).outerHeight()/-2;
         $('#'+popup_name).css({
             'margin-left': q_width,
             'margin-top': q_height
         });
         $('body').append('<div id="fade"></div>');
         $('#fade').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
     }

     $(function() {
         $('body').on('click', '#fade, .popup .popup_close', function() {
             $('#fade, .popup').fadeOut(function() {
                 //$('#popup').remove();
                 $('#fade').remove();
             });
         });
         $('.open_popup').on('click', function() {
             var popup_name = $(this).data('popup');
             show_popup(popup_name);
             return false;
         });
     });*/

    // ========================================================================= POPUP BOUNTY
    function show_popup_how() {
        $('.popup_how').fadeIn();
        q_width = $('.popup_how').outerWidth()/-2;
        q_height = $('.popup_how').outerHeight()/-2;
        $('.popup_how').css({
            'margin-left': q_width,
            //'margin-top': q_height
        });
        $('body').append('<div id="fade"></div>');
        $('#fade').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
    }
    $(function() {
        $('.open_popup_how').on('click', function() {
            var popup_image = $(this).find('.how-image').html();
            $('.popup_how .popup_how_image').html(popup_image);
            show_popup_how();
            return false;
        });
    });
    // ========================================================================= POPUP VIDEO
    $('.open_video').on('click', function() {
        $('.popup_video').fadeIn();
        var playVideo = $(this).data('video');
        $('.popup_video_block').append('<iframe src="https://www.youtube.com/embed/'+playVideo+'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
        q_width = $('.popup_video').outerWidth()/-2;
        q_height = $('.popup_video').outerHeight()/-2;
        $('.popup_video').css({
            'margin-left': q_width,
            'margin-top': q_height
        });
        $('body').append('<div id="fade"></div>');
        $('#fade').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
    });

    $(function() {
        $('body').on('click', '#fade, .popup_how .popup_close, .popup_video .popup_video_close', function() {
            $('#fade, .popup_how, .popup_video').fadeOut(function() {
                $('.popup_video_block').empty();
                $('#fade').remove();
            });
        });
    });

    // ========================================================================= SIDEBAR TO TOP BUTTON
    $(window).scroll(function () {
        var scB = $(window).scrollTop() - $(document).height() + $(window).height();
        if ($(this).scrollTop() > 200) {
            $('.to-top-arrow, .sidebar-to-top').addClass('visible');
            if (scB > -300) {
                $('.to-top-arrow, .sidebar-to-top').addClass('bottom-position');
            }
            else {
                $('.to-top-arrow, .sidebar-to-top').removeClass('bottom-position');
            }
        }
        else {
            $('.to-top-arrow, .sidebar-to-top').removeClass('visible');
        }
    });
    $('.to-top-arrow, .sidebar-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    // ========================================================================= SIDEBAR
    $(function () {
        $('.hide-sidebar').click(function () {
            if(!$(this).parent('#sidebar').hasClass('compact')){
                $(this).parent('#sidebar').addClass('compact');
            }
            return false;
        });
        $('#sidebar, #sidebar.compact::after').click(function () {
            if($(this).hasClass('compact')){
                $(this).removeClass('compact');
            }
        });
        if (window.innerWidth > 1140) {
            $('#sidebar').removeClass('compact');
        }
    });

    // ========================================================================= video btc
    $(function() {
        $("#btc_video").on('click', function() {
            $(this).addClass('playback');
            $(this).html($(this).data('player'));
        });
    });

    // ========================================================================= BOUNTY TABLE RESULT
    $('.table-result .table-option-search input').focus(function () {
        $(this).prev().addClass('active');
    });
    $('.table-result .table-option-search input').blur(function () {
        $(this).prev().removeClass('active');
    });
    $('.table-result thead .t-icons span').on('click', function () {
        $('.table-result thead .t-icons span').removeClass('active');
        $(this).addClass('active');
    });



    // ========================================================================= REVIEW PAGE
    $(function () {
        $('body').on('click', '.review_card .reviews-more', function() {
            var news_block = $(this).parent();
            if($(news_block).hasClass('opened')){
                $(news_block).removeClass('opened');
            }
            else {
                $('.review_card').removeClass('opened');
                $(news_block).addClass('opened');
            }
            return false;
        });
    });

    $('.popup_close').on('click',function(e){
        e.preventDefault();
        $('#popup_back').fadeOut();
        $('#popup-review').fadeOut();
    });
    $('#popup_back').on('click',function(){
        $(this).fadeOut();
        $('#popup-review').fadeOut();
    });
    $(".btn_send_review").on('click', function(e){
        e.preventDefault();
        $('#popup_back').fadeIn();
        $('#popup-review').fadeIn();
    });
    $('.btn_load_more').on('click', function (e) {
        e.preventDefault();
        $('.for_load').after($('.for_load').clone());
    });

    if($('#popup_review_form').length) {
        $('#popup_review_form').validate({
            submitHandler: function () {
                $('#popup_back').fadeOut(2500);
                $('#popup-review').fadeOut();
                $('#thanksFeedback').fadeIn();
                setTimeout(function () {
                    $('#thanksFeedback').fadeOut();
                }, 2000);
            }
        });
    };

    // ========================================================================= POPUP SERTIFICATE
    function show_popup_serf() {
        $('.popup_certificate').fadeIn();
        /*$('body').append('<div id="fade_serf"></div>');*/
        serf_width = $('.popup_certificate').outerWidth()/-2;
        serf_height = $('.popup_certificate').outerHeight();
        $('.popup_certificate').css({
            //'margin-left': q_width,
            //'margin-top': serf_height
        });
        $('#fade_serf').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
    }
    $(function () {
        $('.popup_close_certificate').on('click',function(e){
            e.preventDefault();
            $('#fade_serf').fadeOut();
            $('.popup_certificate').fadeOut();
        });
        $('#fade_serf').on('click',function(){
            $(this).fadeOut();
            $('.popup_certificate').fadeOut();
        });
    });
    if($(window).width() < 768) {
        $('.block_a_n_reg-link-popup').attr('href', $('.block_a_n_reg-link-popup').find('img').attr('src')).attr('target', '_blank');
    }else {
        $(function() {
            $('.block_a_n_reg-link-popup').on('click', function() {
                var popup_image = $(this).find('.sertif_img').html();
                $('.popup_certificate .popup_certificate_image').html(popup_image);
                show_popup_serf();
                return false;
            });
        });
    }
    $( window ).resize(function() {
        if($(window).width() < 768) {
            $('.block_a_n_reg-link-popup').attr('href', $('.block_a_n_reg-link-popup').find('img').attr('src')).attr('target', '_blank');
            $('.block_a_n_reg-link-popup').off('click');
        }else {
            if($(window).width() >= 768) {
                $('.block_a_n_reg-link-popup').attr('href', 'javascript:void(0)') ;
                $(function() {
                    $('.block_a_n_reg-link-popup').on('click', function() {
                        var popup_image = $(this).find('.sertif_img').html();
                        $('.popup_certificate .popup_certificate_image').html(popup_image);
                        show_popup_serf();
                        return false;
                    });
                });
            }
        }
    });

    // ========================================================================= NEWS BLOCK
    $(".news-content .news-more").click(function () {
        var news_block = $(this).parent().parent();
        if($(news_block).hasClass('active')){
            $(news_block).removeClass('active');
        }
        else {
            $('.news-block').removeClass('active');
            $(news_block).addClass('active');
        }
        return false;
    });

    $(".news-image img").click(function () {
        var news_block = $(this).parent().parent();
        if($(news_block).hasClass('active')){
            $(news_block).removeClass('active');
        }
        else {
            $('.news-block').removeClass('active');
            $(news_block).addClass('active');
        }
        return false;
    });

});