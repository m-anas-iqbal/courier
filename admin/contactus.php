<?php
include 'header.php';
?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Contact us</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Home</span></li>

								<li><span>Contact us</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								

								<h2 class="card-title">Contact us</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
                                              <th>id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Message</th>
											<!-- <th>Date</th>
											<th>Action</th> -->
										</tr>
									</thead>
									<tbody>
									<?php
										 $sel="select * from `contactus`";
										 $q1=mysqli_query($db,$sel);
											   while($row =  mysqli_fetch_assoc($q1))
										 {
											 echo '<tr >
											 <td>'.$row['id'].'</td>
											 <td>'.$row['name'].'</td>
											 <td>'.$row['email'].'</td>
                                             <td>'.$row['phone'].'</td>
                                             <td>'.$row['messages'].'</td>
										 </tr>';
										 }
										?>
										
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>

<?php
include 'footer.php';
?>