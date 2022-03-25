$('.city').hide();


$('.country').click( function() {
    $('.city').hide();
    var country= $(this).attr('id') ;
    var country_id= $(this).val() ;
// alert(country_id)
   $('.code').val(country);


    $('.city' +'.'+country_id).show();


});

