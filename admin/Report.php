<?php
include 'header.php';
?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Reports</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Dashboard</span></li>

								<li><span>Reports</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<!-- default / right -->
					<div class="row">
						<div class="col-lg-12">
							<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="nav-item active">
										<a class="nav-link" data-bs-target="#popular" href="#popular" data-bs-toggle="tab"> Status reports</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-target="#recent" href="#recent" data-bs-toggle="tab">Delivered reports</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular" class="tab-pane active">
										<p>Process reports</p>
										<p><select class="form-control"  onchange="courior()" id="courior">
                                <?php
                                $sel0 = "SELECT * FROM `courior` WHERE deliverydate>CURRENT_DATE";
                                $q0 = mysqli_query($db, $sel0);
              ?>
                                        <option value=''>Courier No</option>
                                        <?php while ($row0 = mysqli_fetch_assoc($q0)) {?>
                                                <option value='<?php echo $row0['id']; ?>'><?php echo $row0['id']; ?></option>;
                                        <?php }?>
                                        </select> </p>
										<div id="status">

										</div>
									</div>
									<div id="recent" class="tab-pane">
										<p>Delivered reports</p>
										<p><select class="form-control"  onchange="couriord()" id="couriord">
                                <?php
                                $sel0 = "SELECT * FROM `courior` WHERE deliverydate<CURRENT_DATE";
                                $q0 = mysqli_query($db, $sel0);
              ?>
                                        <option value=''>Courier No</option>
                                        <?php while ($row0 = mysqli_fetch_assoc($q0)) {?>
                                                <option value='<?php echo $row0['id']; ?>'><?php echo $row0['id']; ?></option>;
                                        <?php }?>
                                        </select> </p>
										<div id="delivered">

										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
							function courior()
{
   var courior = $("#courior").val();
  $.ajax({
  url: "../databaseConnection/get_ajax.php",
  type: "POST",
  data: {courior:courior},
  dataType: "html",


success:function(msg) {
	console.log(msg)
   $("#status").html( msg );
},
})
}
function couriord()
{
   var couriord = $("#couriord").val();
  $.ajax({
  url: "../databaseConnection/get_ajax.php",
  type: "POST",
  data: {couriord:couriord},
  dataType: "html",


success:function(msg) {
	console.log(msg)
   $("#delivered").html(msg);
},
})
}

						</script>
<?php
include 'footer.php';
?>