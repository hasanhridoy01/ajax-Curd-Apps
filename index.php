<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Curd Application</title>
	<link rel="stylesheet" href="assert/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
    
    <!-- Student_add_modal -->
    <div id="student_add_modal" class="modal fade">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-body">
    				<h2>Add new Student</h2>
    				<div class="mess"></div>
    				<hr>
    				<form id="add_student_form" action="" method="POST" enctype="multipart/form-data">

    					<div class="form-group">
    						<label for="">Name</label>
    						<input type="text" placeholder="Enter Your Name" class="form-control" name="name">
    				    </div>

                        <div class="form-group">
    						<label for="">E_mail</label>
    						<input type="text" placeholder="Enter Your Email" class="form-control" name="email">
    				    </div>

    					<div class="form-group">
    						<label for="">Cell</label>
    						<input type="text" placeholder="Enter Your Cell" class="form-control" name="cell">
    					</div>

                        <div class="form-group">
    						<label for="">photo</label>
    						<input type="file" class="form-control" name="photo">
    					</div>

    					<div class="form-group">
    						<input type="submit" class="btn btn-outline-info" value="Submit" name="submit"> 
    					</div>
    					
    				</form>
    			</div>
    		</div>
    	</div>
    </div>

     <!-- Single Student_show_modal -->
    <div id="single_student_modal" class="modal fade">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-body">
    				<h2 align="center"> Single Student Data </h2>
    				<hr>
    				<img class="shadow-lg" src="media/student/Hridoy.jpeg" alt="" style="width: 200px; height: 200px; display: block; margin: auto; border-radius: 50%; border: 10px solid white;">
    				<h2 align="center">Hasan Hridoy</h2>

    				<table class="table table-striped">
    					<tr>
    						<td>Name</td>
    						<td></td>
    					</tr>
    					<tr>
    						<td>Email</td>
    						<td></td>
    					</tr>
    					<tr>
    						<td>Cell</td>
    						<td></td>
    					</tr>
    				</table>

    			</div>
    		</div>
    	</div>
    </div>


	 <div class="container">
	 	<div class="row">
	 		<div class="card mt-3 mx-auto shadow-lg">
	 			<div class="card-header">
	 				<h2>All Students</h2>
	 				<div class="mass"></div>
	 				<a id="student_show" href="" class="btn btn-outline-success">Add New Students</a>
	 			</div>
	 			<div class="card-body">
	 				<table class="table table-striped">
	 					<thead>
	 						<tr>
		 						<th>Sl</th>
		 						<th>Name</th>
		 						<th>Email</th>
		 						<th>Cell</th>
		 						<th>Photo</th>
		 						<th>Status</th>
		 					</tr>
	 					</thead>
	 					<tbody>
	 						<tr>
	 							<td>01</td>
	 							<td>Hasan Hridoy</td>
	 							<td>hasanhriody@gmail.com</td>
	 							<td>01701007493</td>
	 							<td>
	 								<img src="media/student/Hridoy.jpeg" alt="" style="height: 50px; width: 90px;">
	 							</td>
	 							<td>
	 								<a id="single_show" href="#" class="btn btn-sm btn-info">View</a>
	 								<a href="#" class="btn btn-sm btn-warning">Edit</a>
	 								<a href="#" class="btn btn-sm btn-danger">Delete</a>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>01</td>
	 							<td>Hasan Hridoy</td>
	 							<td>hasanhriody@gmail.com</td>
	 							<td>01701007493</td>
	 							<td>
	 								<img src="media/student/Hridoy.jpeg" alt="" style="height: 50px; width: 90px;">
	 							</td>
	 							<td>
	 								<a href="#" class="btn btn-sm btn-info">View</a>
	 								<a href="#" class="btn btn-sm btn-warning">Edit</a>
	 								<a href="#" class="btn btn-sm btn-danger">Delete</a>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>01</td>
	 							<td>Hasan Hridoy</td>
	 							<td>hasanhriody@gmail.com</td>
	 							<td>01701007493</td>
	 							<td>
	 								<img src="media/student/Hridoy.jpeg" alt="" style="height: 50px; width: 90px;">
	 							</td>
	 							<td>
	 								<a href="#" class="btn btn-sm btn-info">View</a>
	 								<a href="#" class="btn btn-sm btn-warning">Edit</a>
	 								<a href="#" class="btn btn-sm btn-danger">Delete</a>
	 							</td>
	 						</tr>
	 					</tbody>
	 				</table>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	
    <script src="js/jquery-3.5.1.min.js"></script>
	<script src="assert/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>