$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn(3000)
         .end().appendTo('.fadein');}, 
      7000);
});