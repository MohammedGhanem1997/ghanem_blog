
$("#print").click(function (){


    $('#printthis').printThis({
        importCSS: false,
        loadCSS: "",
        header: "<img src={{asset(site()->logo ) }} >"
    });
})

