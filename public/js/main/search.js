$('.sub-categories').hide();


$('.main-categories').on('change', function() {
    $('.sub-categories').hide();
    $('.sub-categories'+this.value).show();

});

