<!DOCTYPE html>
<html>

<body>
	<!-- All our code. write here   -->
	
    <!-- sidebar here -->
	<?php
    require_once('includes/links.php');
    require_once('includes/header.php');
	require_once('includes/sidebar.php');
	?>


	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
                        <div class="card-header bg-dark text-white text-center">
						    <span>Add Students</span>
					    </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="reg_number">Registration Number</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" name="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="course">Courses</label>
                                            <select name="" id=""  class="form-control">
                                                <option value="">--select a course--</option>
                                                <option value="">Web Design and Development</option>
                                                <option value="">Android Application Development</option>
                                                <option value="">Data Analysis</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row col-lg-3">
                                    <button type="submit" class="btn btn-success">enroll</button>
                                </div>
                            </form>  
                        </div>
                    </div>
				</div>
			</div>
			
		</div>

	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>