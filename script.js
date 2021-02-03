$(function() {
    $(".infomationSubTitle").click(function() {

        if($(this).next().hasClass('display-block')) {
            $(this).next().removeClass('display-block');
        }else{
            $(this).next().addClass('display-block');
        }
    });
    
      

    
});
