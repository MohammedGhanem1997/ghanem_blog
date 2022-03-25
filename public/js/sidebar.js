$(".sub-site").hide();
$(".sub-footer").hide();
$(".slide").click(function() {
   const tid= $(this).attr('tid');

    if ($("."+tid).is(':visible')) {


        $("."+tid).hide();
    } else {

        $("."+tid).show();



}

});


    $("#footer-setting").click(function() {

        if ($(".sub-footer").is(':visible')) {


        } else {
            $(".sub-footer").show();


        }



});
