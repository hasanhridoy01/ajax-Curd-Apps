(function($){
   $(document).ready(function(){

    //Add New Student Modal
    $('a#student_show').click(function(event){
    	event.preventDefault();
    	
    	$('#student_add_modal').modal('show');
    	return false;
    });
    
    //Show View MOdal
    $('a#single_show').click(function(event){
    	event.preventDefault();

    	$('#single_student_modal').modal('show');
    	return false;
    });

    //Add New Student
    $('form#add_student_form').submit(function(event){
    	event.preventDefault();
        
        //Get Some Input Value
    	let name = $('input[name="name"]').val();
    	let email = $('input[name="email"]').val();
    	let cell = $('input[name="cell"]').val();

    	//form validation
    	if ( name == '' || email == '' || cell == '' ) 
    	{
    		$('.mess').html('<p class="alert alert-danger"> all fileds are require! </p>');
    	}else{
            
            //requiest From Ajax 
	    	$.ajax({
	    		url : 'inc/ajax/add_student.php',
	    		data : new FormData(this),
	    		method : "POST",
	    		contentType : false,
	    		processData : false,
	    		success : function(data){

	    			$('form#add_student_form')[0].reset();
	    			$('#student_add_modal').modal('hide');
	    			$('.mass').html(data);
	    		}
	    	});

    	}


    });




   });
})(jQuery)