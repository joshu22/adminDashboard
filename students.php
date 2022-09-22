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
						    <span>Enrolled Students</span>
					    </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-responsive">
                               <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Reg Number</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Enrolled On</th>
                                    <th>Action</th>
                                </tr>
                               </thead>
                               <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Joshua Makau</td>
                                    <td>IN16/20269/15</td>
                                    <td>+254798236541</td>
                                    <td>joshuafundi@gmail.com</td>
                                    <td>Web Design and Development</td>
                                    <td>22nd Sep 2022</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-success btn-sm">
                                           <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                               </tbody>
                            </table>

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