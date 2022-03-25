$(document).ready(function(){

    $('ul.tabs-name li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs-name li').removeClass('currentinput');
        $('.tab-name').removeClass('currentinput');

        $(this).addClass('currentinput');
        $("#"+tab_id).addClass('currentinput');
    })

    $('ul.tabs-title li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs-title li').removeClass('currentinput');
        $('.tab-title').removeClass('currentinput');

        $(this).addClass('currentinput');
        $("#"+tab_id).addClass('currentinput');
    })

    $('ul.tabs-contain li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs-contain li').removeClass('currentinput');
        $('.tab-contain').removeClass('currentinput');

        $(this).addClass('currentinput');
        $("#"+tab_id).addClass('currentinput');
    })

})
