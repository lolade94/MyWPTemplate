
//Menu dropdown animation
jQuery(function($) {
	$('.sub-menu').hide();
	$('.main-navigation .children').hide();
	$('.menu-item').hover( 
		function() {
			$(this).children('.sub-menu').slideDown();
		}, 
		function() {
			$(this).children('.sub-menu').hide();
		}
	);
	$('.main-navigation li').hover( 
		function() {
			$(this).children('.main-navigation .children').slideDown();
		}, 
		function() {
			$(this).children('.main-navigation .children').hide();
		}
	);	
});

//Fit Vids
jQuery(function($) {
  
  $(document).ready(function(){
    $("body").fitVids();
  });
  
});

//Comments clearfix
jQuery(function($) {
	$(".comment-body").addClass('clearfix');
});

//Social links in new window
jQuery(function($) {
     $( '.social-navigation li a' ).attr( 'target','_blank' );
});

jQuery(function($) {
	$('.scrollup').click(function(){
		$('html, body').animate({scrollTop : 0}, 500);
		return false;
	});
});

jQuery(function($){
 

 $('.view').click(function(){
   
   if($('body').hasClass('single')){
	  parent.history.back();
	  $('body.home').animate({scrollTop:300}, 300);
	  return false;
	}
	else{
   $('body').animate({scrollTop:300}, 300);
      return false;
    } 
   
   });
    
 });
 
 
 jQuery(function($){
    $('.email-info').hide();
	
	$('#contact').mouseenter(function(){
	 
	  $('#contact-img').hide(300);
	  $('.email-info').show();
	  
	  $('.email-info').click( function(e){
	   var email="oakinl1@students.towson.edu";
       window.location = 'mailto:' + email;  
	   e.preventDefault();
	  });
	  
	   
	});
	
	$('#contact').mouseleave(function(){
	 
	  $('#contact-img').show(300);
	  $('.email-info').hide()
	   
	});
	
	
	$('.emailme').click (function(e){
	    var bio=  "oakinl1@students@students.towson.edu";
		window.location="mailto:" + bio;
		e.preventDefault();
	});
 
 });
 
 
