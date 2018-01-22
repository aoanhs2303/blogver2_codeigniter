$(document).ready(function($){
    $('.panel-head a').click(function() {
        $('.panel-head .col-6').removeClass('active');
        $(this).parent('.col-6').addClass('active');
        var element = $(this).parent('.col-6').index('.panel-head .row .col-6');
        if(element == 0) {
            $('.form-dangnhap').removeClass('active');
            $('.login-form').addClass('active');
        } else if (element == 1) {
            $('.form-dangnhap').removeClass('active');
            $('.register-form').addClass('active');
        }
        event.preventDefault();
    })
    
    
});
