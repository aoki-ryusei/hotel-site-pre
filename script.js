$(function() {
    $(".menu-bar").click(function() {

        if($(this).next().hasClass('display-block')) {
            $(this).next().removeClass('display-block');
        }else{
            $(this).next().addClass('display-block');
        }
    });
    
    $(".submit-button").click(function() {
        if($(".input-form").val()== ' ') {
            $(".mandatory").css('display','none');
        }

    });

});
