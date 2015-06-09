$(document).on('ready', function(){

	$('.me').click(function(){
	  $(this).toggleClass('open');
	  $('.about').slideToggle("slow");

    });
});