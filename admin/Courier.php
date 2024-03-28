<?php
include 'header.php';
?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Couriers</h2>

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
						<section class="card" style="width:1050px; margin-left:-35px;">
							<header class="card-header">
								<div class="card-actions"><a href="courier_add.php">
                                <button style="margin-top:-7px;" id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
								</a>
								</div>

								<h2 class="card-title">Couriers</h2>
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
											<th>Id</th>
											<th>Ordered Date</th>
                                            <th>Delivery Date</th>
											<th>Weight</th>
											<th>Height</th>
											<th>Width</th>
											<th>Departure</th>
											<th>Destination</th>
											<th>Operationes</th>
										</tr>
									</thead>
									
									<input type="hidden" value="courior" id="tablename">
									<tbody id="usertr">
										<?php
										 $sel="select * from `courior` left join `courier_detail` on  courior.id=courier_detail.dc_id";
										 $q1=mysqli_query($db,$sel);
											   while($row =  mysqli_fetch_assoc($q1))
										 {
											 echo '<tr >
											 <td>'.$row['id'].'</td>
											 <td>'.$row['startdate'].'</td>
											 <td>'.$row['deliverydate'].'</td>
											 <td>'.$row['weight'].'</td>
											 <td>'.$row['height'].'</td>
											 <td>'.$row['width'].'</td>
											 <td>'.$row['departure'].'</td>
											 <td>'.$row['destination'].'</td>
											 <td class="actions">
												 
												 <a href="courier_edit.php?id='.$row['id'].'" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												 <button class="on-default remove-row" onclick="dlt(this)" name="'.$row['id'].'"><i class="far fa-trash-alt"></i></button> </td>
											 <input type="hidden" value="'.$row['id'].'" id="ids'.$row['id'].'">
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
				<script>
				function dlt(ya){
	var id = $(ya).attr('name');
    var ids = $("#ids"+id).val();
	
    var tablename = $("#tablename").val();
  $.ajax({
    url: "../databaseConnection/get_ajax.php",
    type:"POST",
    dataType:"html",
    data:{
        ids:ids,
        tablename:tablename
    },
    
    success: function(result){
        console.log(result)
   $("#usertr").html(result);
  },error: function(result){
    alert("error msg");
    console.log(result)
  }
});
  }
				</script>
<?php
include 'footer.php';
?>