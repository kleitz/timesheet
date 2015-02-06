/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//-------------------------------Pricing container related javascript starts here--------------------------


$('.header').click(function(){
  
  var $this = $(this);
  $this.closest(".whole").find(".content").slideToggle();
  
  
});

$("input").on("mouseenter",function(){
  event.preventDefault();
  
  $(this).animate(
    
    {opacity:1}
  
  
  );

});

$(".whole").on("click","a",function(){
  event.preventDefault();
  $(".plan").removeClass("selected");
  $(this).closest(".whole").find(".plan").addClass("selected");


});



//-------------------------------Pricing container related javascript ends here----------------------------