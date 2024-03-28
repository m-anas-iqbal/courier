<?php
include 'header.php';

?>

<section role="main" class="content-body content-body-modern mt-0">
<header class="page-header">
						<h2>Couriers Add</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Dashboard</span></li>

								<li><span>Couriers</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed"  action="../databaseConnection/insert.php" method="post">
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
												<h2 class="card-big-info-title">Courier Add</h2>
												<p class="card-big-info-desc">Add here the Courier description with all information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Height</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="height" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Width</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="width" value="" required />
													</div>
												</div>
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Weight</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="weight" value=""required />
                                                    </div>
                                                    
                                                </div>
                                               
                                                
                                                <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Start date</label>
													<div class="col-lg-7 col-xl-6">
														<input type="date" class="form-control form-control-modern" name="startdate" value="" required/>
                                                    </div> 
                                                    </div> 
                                                

                                                <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">End date</label>
													<div class="col-lg-7 col-xl-6">
														<input type="date" class="form-control form-control-modern" name="deliverydate" value="" />
                                                    </div>   
                                                    </div>   
													<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">City of departure </label>
													<div class="col-lg-7 col-xl-6">
														<!-- <input type="text" class="form-control form-control-modern" name="departure" value="" /> -->
														<select placeholder="To" name="departure"  class="form-control to fw-600" id="city1">
                                                        <option value="">To</option>
                                                        <?php 
                                                            $sel="select * from `city` ";
                                                            $q1=mysqli_query($db,$sel);
                                                                  while($row =  mysqli_fetch_assoc($q1))
                                                            {
                                                                echo "<option value='".$row['city']."'>".$row['city']."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">City of destination</label>
													<div class="col-lg-7 col-xl-6">
														<!-- <input type="text" class="form-control form-control-modern" name="destination" value="" /> -->
														<select placeholder="From" name="destination" class="form-control to fw-600" id="city2">
                                                        <option value="">From</option>
                                                        <?php 
                                                            $sel="select * from `city` ";
                                                            $q1=mysqli_query($db,$sel);
                                                                  while($row =  mysqli_fetch_assoc($q1))
                                                            {
                                                                echo "<option value='".$row['city']."'>".$row['city']."</option>";
                                                            }
                                                        ?>
                                                    </select>
													</div>   
                                                </div>
												<div class="form-group row align-items-center mb-3">
												<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Full Adress Departure</label>
												  <div class="col-lg-7 col-xl-6">
													<textarea class="form-control form-control-modern" name="d_departure" value="" data-plugin-maxlength="" maxlength="140"></textarea>
												</div>
												</div>   
												<div class="form-group row align-items-center mb-3">
												<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Full Adress Destination</label>
												  <div class="col-lg-7 col-xl-6">
													<textarea class="form-control form-control-modern" name="d_destination" value=""   data-plugin-maxlength="" maxlength="140"></textarea>
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
								<button type="submit" name="couieradd" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 me-2"></i> Save information
								</button>
						
						</div>
					</form>
					<!-- end: page -->
				</section>
<?php

include 'footer.php';
?>