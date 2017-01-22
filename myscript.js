$(function(){
	$('#contact-frm1').submit(function(e){
		//prevent default fuctionality of form submision
		e.preventDefault();
		var formdata = $(this).serialize();
		console.log(formdata);
	});
});