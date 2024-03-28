<?php
include 'header.php';
$id = $_GET['id'];

$sel ="select * from `courior` left join `courier_detail` on  courior.id=courier_detail.dc_id where courior.id= $id";
$q1=mysqli_query($db,$sel);
while($row =  mysqli_fetch_assoc($q1))
{
  
?>
<section role="main" class="content-body content-body-modern mt-0">
<header class="page-header">
						<h2>Couriers Edit</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Home</span></li>

								<li><span>Couriers</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- start: page -->
					<form class="ecommerce-form action-buttons-fixed" action="../databaseConnection/insert.php?id=<?php echo $row['id'];?>" method="post">
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
												<i class="card-big-info-icon bi bi bi-pencil-square"></i>
												<h2 class="card-big-info-title">Courier Edit</h2>
												<p class="card-big-info-desc">Edit here the Courier description with all information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Height</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="height" value="<?php echo $row['height'];?>" required />
													</div>
												</div>
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Width</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="width" value="<?php echo $row['width'];?>" required />
													</div>
												</div>
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Weight</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="weight" value="<?php echo $row['weight'];?>" />
                                                    </div>
                                                    
                                                </div>
                                               
                                                
                                                <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Start date</label>
													<div class="col-lg-7 col-xl-6">
														<input type="date" class="form-control form-control-modern" name="startdate" value="<?php echo $row['startdate'];?>" />
                                                    </div> 
                                                    </div> 
                                                

                                                <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">End date</label>
													<div class="col-lg-7 col-xl-6">
														<input type="date" class="form-control form-control-modern" name="deliverydate" value="<?php echo $row['deliverydate'];?>" />

                                                    </div>   
                                                    </div>   
													<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">City of departure </label>
													<div class="col-lg-7 col-xl-6">
													<select placeholder="To" name="departure" class="form-control to fw-600" id="city1">
                                                        <option value="">To</option>
                                                        <?php 
                                                            $sel1="select * from `city` ";
                                                            $q2=mysqli_query($db,$sel1);
                                                                  while($row1 =  mysqli_fetch_assoc($q2))
                                                            {
																if ($row['departure'] == $row1['city']) {
																	echo "<option value='".$row1['city']."' selected>".$row1['city']."</option>";
																} else{
																	
																	echo "<option value='".$row1['city']."'>".$row1['city']."</option>";
																}
                                                            }
                                                        ?>
                                                    </select>
														<!-- <input type="text" class="form-control form-control-modern" name="departure" value="" /> -->
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">City of destination</label>
													<div class="col-lg-7 col-xl-6">
														<!-- <input type="text" class="form-control form-control-modern" name="destination" value="" /> -->
														
														<select placeholder="From" name="destination" class="form-control to fw-600" id="city2">
                                                        <option value="">From</option>
                                                        <?php 
                                                            $sel1="select * from `city` ";
                                                            $q2=mysqli_query($db,$sel1);
                                                                  while($row1 =  mysqli_fetch_assoc($q2))
                                                            {
																if ($row['destination'] == $row1['city']) {
																	echo "<option value='".$row1['city']."' selected>".$row1['city']."</option>";
																} 
																else
                                                                {echo "<option value='".$row1['city']."'>".$row1['city']."</option>";}
                                                            }
                                                        ?>
                                                    </select>
													
													</div>   
                                                </div>
												<div class="form-group row align-items-center mb-3">
												<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Full Adress Departure</label>
												  <div class="col-lg-7 col-xl-6">
													<textarea class="form-control form-control-modern" name="d_departure" data-plugin-maxlength="" maxlength="140"><?php echo $row['d_departure'];?></textarea>
												</div>
												</div>   
												<div class="form-group row align-items-center mb-3">
												<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Full Adress Destination</label>
												  <div class="col-lg-7 col-xl-6">
													<textarea class="form-control form-control-modern" name="d_destination" data-plugin-maxlength="" maxlength="140"><?php echo $row['d_destination'];?></textarea>
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
								<button type="submit" name="couieredit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 me-2"></i> Save information
								</button>
						
						</div>
					</form>
					<!-- end: page -->
				</section>
<?php
}
include 'footer.php';
?>