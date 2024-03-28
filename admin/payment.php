<?php
include 'header.php';
?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Payment</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Home</span></li>

								<li><span>Payment</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								

								<h2 class="card-title">Payment</h2>
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
											<th>Order No</th>
											<th>User Name</th>
											<th>Account No</th>
											<th>Payment</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
										 $sel="select * from `orders` left join `users` on  users.id=orders.user_id";
										 $q1=mysqli_query($db,$sel);
											   while($row =  mysqli_fetch_assoc($q1))
										 {
											 echo '<tr >
											 <td>'.$row['o_id'].'</td>
											 <td>'.$row['name'].'</td>
											 <td>'.$row['acc_no'].'</td>
											 <td>'.$row['paid'].'</td>
											 <td>'.$row['o_date'].'</td>
											 <td class="actions">
												 
												 <a href="../reportpdf.php?id='.$row['courior_id'].'" class="on-default edit-row">PDF</a>
											 </td>
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