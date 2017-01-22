$(function(){
	$('#contact-frm').submit(function(e){
		//prevent default fuctionality of form submision
		e.preventDefault();
		
		//make ajax post request
		$.ajax({
			url:'save-contact.php',
			type:'post',
			data:{
				txtName	  :	$('#txtName').val().trim(),
				txtEmail  :	$('#txtEmail').val().trim(),
				txtCompany:	$('#txtCompany').val().trim(),
				txtPhone  :	$('#txtPhone').val().trim(),
				txtMessage:	$('#txtMessage').val().trim(),
			},
			beforeSend:function(){
				display_msg('Wait: Processing','info');
			},
			success:function(response){
				display_msg(response,'success');
				//reset form inputs
				$('#contact-frm')[0].reset();
			},
			error:function(){
				display_msg('Some error occured','danger');
				/*
				visit http://www.codingsips.com/ajax-with-error-handling 
				for detailed error handling
				*/
			}
		});
	});
});

function display_msg(str,type){
	//str  = error or success message
	//type = for success green, for error red
	$('.result').html('<div class="alert alert-'+type+'">'+str+'</div>').slideDown();
}