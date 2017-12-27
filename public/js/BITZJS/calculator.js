/*
$(function(){
	calc();
	$('#calc_plan').on('change', calc);
	$('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);
});

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
*/

function replaceComma(e) {
    e.value=e.value.replace(/,/g, '.');
}

// ========================================================================= CALCULATOR HOME
/*$(document).ready(function () {
    $('#plan').on('change', function () {
        if(!$('#amount').val()){
            $('#amount').val((0.10000000).toFixed(8));
        }
        setTimeout(function () {
            calculate();
        }, 50);

    });

    $('#amount').on('input', function () {
        replaceComma(this);
        setTimeout(function () {
            calculate();
        }, 50);
    });
});


function calculate() {

    if($('#plan option:selected').is(':disabled')){
        $("#plan option:not([disabled])").first().attr("selected", "selected");
    }

    var planPercent = $('#plan').val(),
        planDays = $('#plan').children('option:selected').data('days'),
        plan = $('#plan').children('option:selected').data('plan'),
        amount = $('#amount').val();

    if(plan <= 2) {
        var totalProfit = (parseFloat(amount) + parseFloat(planPercent) / 100 * parseFloat(amount) * planDays).toFixed(8);
        var dailyProfit = (parseFloat(planPercent) / 100 * parseFloat(amount) * 1).toFixed(8);
    }
    else if(plan == 3){
        var totalProfit = (parseFloat(amount) + parseFloat(planPercent) / 100 * parseFloat(amount) * planDays).toFixed(8);
        var dailyProfit = (parseFloat(planPercent) / 100 * parseFloat(amount) * 1).toFixed(8);
    }
    else if(plan >= 4){
        var totalProfit = (parseFloat(planPercent) / 100 * parseFloat(amount)).toFixed(8);
        var dailyProfit = 'on completion';
    }

    if (!amount){
        /!* $('#amount').val((0.10000000).toFixed(8));
         amount = (0.10000000).toFixed(8);*!/
        $('#percent').text('');
        $('#total').text('');
    }
    else{
        $('#percent').text(dailyProfit);
        if (totalProfit) {
            $('#total').text(totalProfit);
        }
    }
}*/
// ========================================================================= CALCULATOR FOOTER
$(document).ready(function () {
    $('#currency_footer').on('change', function () {
        var currency_rate = parseInt($(this).val());
        var plan_minimum = $('#plan_footer').children('option:selected').data('minimum');
        $('#amount_footer').val(plan_minimum/currency_rate);

        /*if(!$('#amount_footer').val()){
            $('#amount_footer').val((0.10000000).toFixed(8));
        }*/
        setTimeout(function () {
            calculate_footer();
        }, 50);
    });

    $('#plan_footer').on('change', function () {
        var curency_rate = $('#currency_footer').children('option:selected').val();
        var plan_minimum = $('#plan_footer').children('option:selected').data('minimum');
        console.log(plan_minimum);
        $('#amount_footer').val(plan_minimum/curency_rate);

        /* if(!$('#amount_footer').val()){
             $('#amount_footer').val((0.10000000).toFixed(8));
         }*/
        setTimeout(function () {
            calculate_footer();
        }, 50);
    });

    $('#amount_footer').on('input', function () {
        replaceComma(this);
        setTimeout(function () {
            calculate_footer();
        }, 50);
    });
});

function calculate_footer() {
    var to_fixed = 8;
    var currency_payment = parseInt($('#currency_footer').children('option:selected').data('payment'));
    if(currency_payment!=48){
        to_fixed=2;
    }

    if($('#plan_footer option:selected').is(':disabled')){
        $("#plan_footer option:not([disabled])").first().attr("selected", "selected");
    }

    var planPercent_footer = $('#plan_footer').val(),
        planDays_footer = $('#plan_footer').children('option:selected').data('days'),
        plan_footer = $('#plan_footer').children('option:selected').data('plan'),
        amount_footer = $('#amount_footer').val();

    if(plan_footer <= 2) {
        var totalProfit_footer = (parseFloat(amount_footer) + parseFloat(planPercent_footer) / 100 * parseFloat(amount_footer) * planDays_footer).toFixed(to_fixed);
        var dailyProfit_footer = (parseFloat(planPercent_footer) / 100 * parseFloat(amount_footer) * 1).toFixed(to_fixed);
    }
    else if(plan_footer == 3){
        var totalProfit_footer = (parseFloat(amount_footer) + parseFloat(planPercent_footer) / 100 * parseFloat(amount_footer) * planDays_footer).toFixed(to_fixed);
        var dailyProfit_footer = (parseFloat(planPercent_footer) / 100 * parseFloat(amount_footer) * 1).toFixed(to_fixed);
    }
    else if(plan_footer >= 4){
        var totalProfit_footer = (parseFloat(planPercent_footer) / 100 * parseFloat(amount_footer)).toFixed(to_fixed);
        var dailyProfit_footer = 'on completion';
    }

    if (!amount_footer){
        $('#percent_footer').text('');
        $('#total_footer').text('');
    }
    else{
        $('#percent_footer').text(dailyProfit_footer);
        if (totalProfit_footer) {
            $('#total_footer').text(totalProfit_footer);
        }
    }

}

// ========================================================================= CALCULATOR INVESTMENT BLOCK
$(document).ready(function () {
    $('.currency-list li a').on('click', function () {

        $(".currency-list li a").removeClass('selected');
        $(this).addClass("selected");

        var currency_rate = parseInt($(this).data('rate'));
        var currency_name = parseInt($(this).data('currency'));
        var currency_payment = parseInt($(this).data('payment'));

        $('.summs-hover-new').removeClass('active');
        $('.summs-hover-new.payment-'+currency_payment).addClass('active');

        var amount = parseInt($('.plan-list li a.selected').data('minimum'))/currency_rate;
        $('#amount-in').val(amount);
        console.log(amount);


        $(".currency-href a").html($(this).html());
        setTimeout(function () {
            calculatePlans();
        }, 50);

    });




    $('.plan-list li a').on('click', function () {

        $(".plan-list li a").removeClass('selected');
        $(this).addClass("selected");

        var currency_payment = parseInt($('.currency-list li a.selected').data('payment'));
        var currency_rate = parseInt($('.currency-list li a.selected').data('rate'));
        var plan = parseInt($(this).data('plan'));

        $('#plan-carousel').slick('slickGoTo', plan-3, true);


        $('.plan-block .pl-inn').removeClass('active');
        $('.plan-block').find(".pl-inn[data-plan='" + plan + "']").addClass('active');


        $('#amount-in').val($(this).data('minimum')/currency_rate);


        $(".plan-href a").html($(this).html());
        setTimeout(function () {
            calculatePlans();
        }, 50);

    });

    $('#amount-in').on('input', function () {
        replaceComma(this);

        if(!$('.plan-list li a.selected').length){
            $(".plan-list li:first-of-type a").addClass("selected");
            $(".plan-href a").html($(".plan-list li:first-of-type a").html());
        }

        setTimeout(function () {
            calculatePlans();
        }, 50);
    });

    $(document).on("click",".plan-block .pl-inn", function() {
        $('.plan-block .pl-inn').removeClass('active');
        $(this).addClass('active');
        var plan = $(this).data('plan');
        var selectedPlan = $(".plan-list").find("a[data-plan='" + plan + "']");

        var currency_payment = parseInt($('.currency-list li a.selected').data('payment'));
        var currency_rate = parseInt($('.currency-list li a.selected').data('rate'));

        var planMinimum = selectedPlan.data('minimum')/currency_rate;
        $(".plan-list li a").removeClass('selected');
        $(".plan-href a").html(selectedPlan.html());
        selectedPlan.addClass("selected");

        $('#amount-in').val(planMinimum);

        setTimeout(function () {
            calculatePlans();
        }, 50);
    });
});


function calculatePlans() {
    var to_fixed = 8;
    var currency_payment = parseInt($('.currency-list li a.selected').data('payment'));
    if(currency_payment==18){
        to_fixed=2;
    }

    var planPercent = $('.plan-list li a.selected').data('value'),
        planDays = $('.plan-list li a.selected').data('days'),
        plan = $('.plan-list li a.selected').data('plan');

    if(!$('.plan-list li a.selected').length){
        $(".plan-list li:first-of-type a").addClass("selected");
        $(".plan-href a").html($(".plan-list li:first-of-type a").html());
    }
    var amount = $('#amount-in').val();

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
        var dailyProfit = "<small>on completion</small>";
    }

    if (!$('#amount-in').val()){
        $('#percent-in').text('');
        $('#total-in').text('');
    }
    else{
        $('#percent-in').html(dailyProfit);
        if (totalProfit) {
            $('#total-in').text(totalProfit);
        }
    }
}
// ========================================================================= CLEAR INPUT ON BLUR & FOCUS
//var inputs = $("#amount, #amount_footer");
var origValue = [];
$('#amount, #amount_footer').each(function(i){
    origValue.push($(this).val());
    $(this).focus(function(){
        var defaultText = $(this).val();
        if ($(this).val() == origValue[i])
            $(this).val('');
        $(this).blur(function(){
            if ($(this).val() == '')
                $(this).val(defaultText);
        });
    });
});

$("#amount-in")
    .focus(function() {
        $(this).val("");
        $('#percent-in').text('');
        $('#total-in').text('');
    })
    .focusout(function() {
        if($(this).val()==""){
            var selectedPlan = $('.plan-list li a.selected').data('minimum')
            var currency_rate = parseInt($('.currency-list li a.selected').data('rate'));
            var planMinimum = selectedPlan.data('minimum')/currency_rate;

            $('#amount-in').val(planMinimum);
            calculatePlans();
        }
    });
