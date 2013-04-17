$(function(){
    $('.head-wrapper').delegate('h1','click',function(){
        $(this).siblings().toggle();
    });
});