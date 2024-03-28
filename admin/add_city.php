<?php
include 'header.php';
?>
<section role="main" class="content-body">

<header class="page-header">
    <h2>Add City</h2>

    <div class="right-wrapper text-end">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="bx bx-home-alt"></i>
                </a>
            </li>

            <li><span>Home</span></li>

            <li><span>Add City</span></li>

        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
    </div>
</header>
                                                    <div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center mb-3">
													<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Add City</label>
													<div class="col-lg-3 col-xl-7">
														<input type="text" placeholder="Enter City Name" class="form-control form-control-modern" id="city" name="categoryName" value="" required pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$" />
													</div>
												</div>
                                                <div class="card-actions">
                                                  <button style="margin-top:-12px; margin-left:-110px;" id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>

								                     </div>
                                                     <!-- start: page -->
						<section class="card" style="width:130%; margin-left:-35px;">
							<header class="card-header">
								<div class="card-actions">
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
											<th>City Name</th>
											<th>Operationes</th>
										<input type="hidden" value="city" id="tablename">
										</tr>
									</thead>
									<tbody id="tr_city">
									<?php
										 $sel="select * from `city`";
										 $q1=mysqli_query($db,$sel);
											   while($row =  mysqli_fetch_assoc($q1))
										 {
											 echo '<tr>
											 <td>'.$row['c_id'].'</td>
											 <td>'.$row['city'].'</td>
											 <td class="actions">
											

											 
											 <button class="on-default remove-row" onclick="dlt(this)" name="'.$row['c_id'].'"><i class="far fa-trash-alt"></i></button></td>
											 <input type="hidden" value="'.$row['c_id'].'" id="ids'.$row['c_id'].'">
											 </td>
										 </tr>';
										 }
										?>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
<script>
function dlt(ya){
	console.log("working");
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
   $("#tr_city").html(result);
  },error: function(result){
    alert("error msg");
    console.log(result)
  }
});
  }
	   $(document).ready(function(){
		   

  $("#addToTable").click(function(){
    var city = $("#city").val();
  $.ajax({
    url: "../databaseConnection/get_ajax.php",
    type:"POST",
    dataType:"html",
    data:{
        city:city
    },
    success: function(result){
   $("#tr_city").html(result);
   $("#city").val(null);
  },error: function(result){
    alert("error msg");
	$("#city").val(null);
  }
});


  });
});
</script>


<?php
include 'footer.php';
?>