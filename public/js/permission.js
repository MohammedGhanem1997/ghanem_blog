


$(".checkbox").click(function() {
    $(this).hide();
    $("#append").append($(this));
    $("#append option").show()
    $("#append option").addClass('remove');
});
$( " option.remove " )
    .click(function() {


        var check =$(this).attr('class')
        if (check == 'append'){
            alert(check)
        }

})

    // $(this).remove();
    // $(" .checkbox").append( $(this));

