$(document).ready(function() {
    $("#DIV_36").on("click", ".deplan", function(){
        $("#DIV_36 .deplan").removeClass("depositnew"); //удаляем класс во всех вкладках
        $(this).addClass("depositnew"); //добавляем класс текущей (нажатой)
    });
    $("#DIV_150").on("click",".standartbutton",function(){
        $("#DIV_150 .standartbutton").removeClass("activebutton");
        $(this).addClass("activebutton");
    });





});
