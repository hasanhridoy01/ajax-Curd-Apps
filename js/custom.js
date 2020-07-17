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




   });
})(jQuery)