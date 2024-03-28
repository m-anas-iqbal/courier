<?php
include 'header.php';

$sel ="select * from priceing where 1";
$q1=mysqli_query($db,$sel);
while($row =  mysqli_fetch_assoc($q1))
{
  
?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Pricing</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Home</span></li>

								<li><span>Pricing</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
						</header>
					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="../databaseConnection/select.php" method="post">
						<div class="row mt-2">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">

							
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row mt-2">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bi bi-currency-dollar"></i>
												<h2 class="card-big-info-title">Pricing</h2>
												<p class="card-big-info-desc">Edit here the User description with all information.</p>
											</div>
										<div class="col-lg-3-5 col-xl-4-5">
											<div class="row ">
												<div class="col-lg-6">
													<label class=" control-label text-lg-end mb-0">Height <span>(CM)</span> </label>
													<div class="col">
														<input type="text" placeholder="Enter Height" class="form-control form-control-modern" name="height" value="<?php echo $row['height'];?>" />
                                                    </div>
												</div>
												<div class="col-lg-6">
												    <label class=" control-label text-lg-end mb-0">Height Cost</label>
													<div class="col">
													   <input type="text" placeholder="Enter Height Cost" class="form-control form-control-modern" name="h_cost" value="<?php echo $row['h_cost'];?>" />
                                                    </div>
											    </div>
											</div>

											<div class="row mt-3">
												<div class="col-lg-6">
													<label class=" control-label text-lg-end mb-0">Width <span>(CM)</span> </label>
													<div class="col">
														<input type="text" placeholder="Enter Width" class="form-control form-control-modern" name="width" value="<?php echo $row['width'];?>" />
                                                    </div>
												</div>
												<div class="col-lg-6">
												    <label class=" control-label text-lg-end mb-0">Width Cost</label>
													<div class="col">
													   <input type="text" placeholder="Enter Width Cost" class="form-control form-control-modern" name="w_cost" value="<?php echo $row['w_cost'];?>" />
                                                    </div>
											    </div>
											</div>

											<div class="row mt-3">
												<div class="col-lg-6">
													<label class=" control-label text-lg-end mb-0">Weight <span>(KG)</span> </label>
													<div class="col">
														<input type="text" placeholder="Enter Weight" class="form-control form-control-modern" name="weight" value="<?php echo $row['weight'];?>" />
                                                    </div>
												</div>
												<div class="col-lg-6">
												    <label class=" control-label text-lg-end mb-0">Weight Cost</label>
													<div class="col">
													   <input type="text" placeholder="Enter Weight Cost" class="form-control form-control-modern" name="wt_cost" value="<?php echo $row['wt_cost'];?>" />
                                                    </div>
											    </div>
											</div>

											<div class="row mt-3">
												<div class="col-lg-12">
													<label class=" control-label text-lg-end mb-0">Parcel Cost</label>
													<div class="col">
														<input type="number"  placeholder="Enter Total Cost" class="form-control form-control-modern" name="parcel_cost" value="<?php echo $row['parcel_cost'];?>" />
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
								<button type="submit" name="pricing" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 me-2"></i> Save information
								</button>
						
						</div>
					</form>
					<!-- end: page -->
				</section>





</section>
<?php
}
include 'footer.php';
?>