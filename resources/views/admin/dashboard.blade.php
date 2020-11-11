@extends('admin_layout')
@section('admin_content')
	<!--  content  user -->

			<!--  content  user -->

						<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Dashboard</h4>
<div class="row">
							<div class="col-md-3">
					<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
								<div class="icon-big text-center">
									<i class="la la-users"></i>
												</div>
											</div>
						<div class="col-7 d-flex align-items-center">
												<div class="numbers">
								<p class="card-category">Visitors</p>
									<h4 class="card-title">1,294</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
					<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
								<div class="icon-big text-center">
									<i class="la la-bar-chart"></i>
												</div>
											</div>
						<div class="col-7 d-flex align-items-center">
												<div class="numbers">
									<p class="card-category">Sales</p>
								<h4 class="card-title">$ 1,345</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
						<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
								<div class="icon-big text-center">
								<i class="la la-newspaper-o"></i>
												</div>
											</div>
						<div class="col-7 d-flex align-items-center">
										<div class="numbers">
							<p class="card-category">Subscribers</p>
									<h4 class="card-title">1303</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
								<div class="numbers">
								<p class="card-category">Order</p>
									<h4 class="card-title">576</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
			<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
<div class="icon-big text-center icon-warning">
						<i class="la la-pie-chart text-warning"></i>
												</div>
											</div>
<div class="col-7 d-flex align-items-center">
											<div class="numbers">
									<p class="card-category">Number</p>
								<h4 class="card-title">150GB</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
						<i class="la la-bar-chart text-success"></i>
												</div>
											</div>
						<div class="col-7 d-flex align-items-center">
										<div class="numbers">
						<p class="card-category">Revenue</p>
									<h4 class="card-title">$ 1,345</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-times-circle-o text-danger"></i>
												</div>
											</div>
							<div class="col-7 d-flex align-items-center">
										<div class="numbers">
													<p class="card-category">Errors</p>
													<h4 class="card-title">23</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-heart-o text-primary"></i>
												</div>
											</div>
						<div class="col-7 d-flex align-items-center">
								<div class="numbers">
								<p class="card-category">Followers</p>
									<h4 class="card-title">+45K</h4>
										</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
							 <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard/</a></li>
          <li class="active">Users</li>
        </ol>
      </div>
    </section>
<!-- end table -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Name</th>
                        <th>Email</th>
						<th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                   			
					
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
						</div>
					</div>
				</div>
			</div>
							<!-- end of content  user -->

			</div>
<!--model edit  user -->
<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- end-of model edit  user -->
<!--  model add  user -->
<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end of Edit Modal HTML -->
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
		<!-- end of Delete Modal HTML -->

<!--  end-of model add  user -->
<!-- end of table -->





@endsection