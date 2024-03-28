<?php
include 'header.php';
?>
<section role="main" class="content-body content-body-modern mt-0">
<header class="page-header">
						<h2>User Add</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Home</span></li>
 
								<li><span>User Add</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="../databaseConnection/insert.php" method="post">
						<div class="row mt-2">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
							
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bi bi-plus-square"></i>
												<h2 class="card-big-info-title">User Add</h2>
												<p class="card-big-info-desc">Add here the User description with all information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Name</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="name" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Address</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="address" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Phone No</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="phone" value="" />
                                                    </div>
                                                    
                                                </div>
                                               
                                                
                                             
                                                

													<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Email</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="email" value="" />
                                                    </div>   
                                                    </div> 
													 <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Password</label>
													<div class="col-lg-7 col-xl-6">
														<input type="password" name="password" class="form-control form-control-modern" value="" />
                                                    </div>   
                                                    </div>   
													<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Role</label>
													<div class="col-lg-7 col-xl-6">
                                                    <select class="form-select" name="role" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="user">User</option>
                                                        <option value="agent">Agent</option>
                                                    </select>                                                    
                                                </div> 
                                                    </div> 
													<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Status</label>
													<div class="col-lg-7 col-xl-6">
                                                    <select class="form-select" name="status" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="block">Block</option>
                                                        <option value="active">Active</option>
                                                    </select>                                                    
                                                </div>
                                                    
                                                </div>
                                                
                                                
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="row action-buttons">
							<div class="col-12 col-md-auto">
								<button type="submit" name="adminaddu" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 me-2"></i> Save information
								</button>
						
						</div>
					</form>
					<!-- end: page -->
				</section>
<?php
include 'footer.php';
?>