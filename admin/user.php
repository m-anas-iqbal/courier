<?php
include 'header.php';
?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Users</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>Home</span></li>

								<li><span>Users</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
								<a href="user_add.php">
                                <button style="margin-top:-7px;" id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
								</a>
								</div>

								<h2 class="card-title">Users</h2>
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
											<th>Name</th>
											<th>Address</th>
											<th>Role</th>
											<th>Phone no</th>
											<th>Email</th>
											<th>Status</th>
											<th>Created</th>
											<th>Operationes</th>
										</tr>
										<input type="hidden" value="<?php echo "users"; ?>" id="tablename">
									</thead>
									<tbody id="usertr">
									<?php
										 $sel="select * from `users` ";
										 
										 $q1=mysqli_query($db,$sel);
											   while($row =  mysqli_fetch_assoc($q1))
										 {
											if ($row['status'] === "active") {
												$status = "<div style='width:20px;height: 20px;border-radius:50%;background-color: green;'></div>";
											 } else {
												$status ="<div style='width:20px;height: 20px;border-radius:50%;background-color: red;'></div>";
											 } 
											 echo '<tr >
											 <td>'.$row['id'].'</td>
											 <td>'.$row['name'].'</td>
											 <td>'.$row['address'].'</td>
											 <td>'.$row['role'].'</td>
											 <td>'.$row['phone'].'</td>
											 <td>'.$row['email'].'</td>
											 <td>'.$status.'</td>
											 <td>'.$row['created'].'</td>
											 <td class="actions">
											 <a href="user_edit.php?id='.$row['id'].'" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
											 <button class="on-default remove-row" onclick="dlt(this)" name="'.$row['id'].'"><i class="far fa-trash-alt"></i></button> </td>
											 <input type="hidden" value="'.$row['id'].'" id="ids'.$row['id'].'">
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