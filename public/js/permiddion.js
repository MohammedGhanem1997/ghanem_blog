//
//     alert('tet')
//     var controller=$(this).attr('controller_id');
//
//     alert(controller)
//
// })
$(' .permission').hide();
$('.controller').click(function (){
    $(' .permission').hide();

    var controller=$(this).attr('controller_id');
    $('.'+controller).show();


})
// $('.permmisioncreate').on('change', function() {
//     var controller= this.value ;
// alert(controller)
    // $('.permission').show();

    // $('select option .permission').hide();

    // $('.permission .'+ controller).show();
//});
