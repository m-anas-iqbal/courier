<?php 
include 'header.php'
?>
<!-- Banner -->
            <section class="banner banner-style2 mask-overlay pt-120 white-clr">
                    <div class="pad-50 hidden-xs"></div>
                    <div class="container theme-container rel-div">
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">  <span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery </span> services </h2>
                        <div class="pad-30"></div>
         
                            <div class="pad-10"></div>
                        </div>
                    </div>                    
                </section>
                <!-- /.Banner -->
                      <!-- Breadcrumb -->
                      <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin">Courier</h2>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Courier</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->
            <!-- Calculate Your Cost -->
            <section class="calculate pt-100">
                    <div class="theme-container container">  
                        <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Courier </span>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="assets/img/block/Courier-Man.png" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > Courier order </h2>
                                <div class="calculate-form">
                                    <div class="row">
                                    <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Days : </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                                   <input type="date" name="startdate"placeholder="Start date"  class="form-control" id="startdate">
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                <input type="date" name="enddate"placeholder="End date" class="form-control" id="enddate">
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                            <div class="col-sm-9"> <input type="text" placeholder="height (cm)" class="form-control" id="height" > </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> width (cm): </label></div>
                                            <div class="col-sm-9"> <input type="text" placeholder="width (cm)" class="form-control"  id="width"> </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                            <div class="col-sm-9"> <input type="text" placeholder="weight (kg)" class="form-control"  id="weight"> </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                                    <!-- <input type="text" placeholder="From" class="form-control from fw-600"  id="city1"> -->
                                                    <select  placeholder="From" class="form-control from fw-600"  id="city1">
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
                                                <div class="col-sm-6 no-pad">
                                                    <!-- <input type="text" placeholder="To" class="form-control to fw-600"  id="city2"> -->
                                                    <select placeholder="To" class="form-control to fw-600" id="city2">
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
                                        </div>
                                        
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2">Departure Address</label></div>
                                            <div class="col-sm-9"><textarea name="d_departure "class="form-control" placeholder="Details of departure" id="d_departure" ></textarea> </div>                                        
                                        </div>
                                        
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2">Destination Address</label></div>
                                            <div class="col-sm-9"> <textarea name="d_destination"  id="d_destination"class="form-control"  placeholder="Details of destination"  ></textarea></div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9"></div>
                                            <div class="col-sm-3"> 
                                                <button id="cal" type="submit"style="margin-left: -25px;" name="calculation" class="btn-1">Calculation</button>
                                            </div>                                        
                                        </div>
                                        
                                                        </div>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
<script>
   $(document).ready(function(){
  $("#cal").click(function(){
    var startdate1 = $("#startdate").val();
      var enddate1 = $("#enddate").val();
    var height1 = $("#height").val();
    var width1 = $("#width").val();
    var weight1 = $("#weight").val();
    var city11 = $("#city1").val();
    var city21 = $("#city2").val();
    var d_destination1 = $("#d_destination").val();
    var d_departure1 = $("#d_departure").val();
  $.ajax({
    url: "databaseConnection/get_ajax.php",
    type:"POST",
    dataType:"html",
    data:{
        startdate1:startdate1,
        enddate1:enddate1,
        height1:height1,
        width1:width1,
        weight1:weight1,
        city11:city11,
        city21:city21,
        d_destination1:d_destination1,
        d_departure1:d_departure1
    },
    
    success: function(result){
        
// window.location.href = "payment.php";
        // window.location.replace("http://www.w3schools.com");
        console.log(result)
        if (result == 0) {
            window.location.href = "payment.php";
        } else {
            window.location.href = "index.php";
        }

//    $("#total_cost").text(result);
  },error: function(result){
    alert("error msg");
    console.log(result)
  }
});
  });
});

</script>
                <!-- /.Calculate Your Cost -->
                <!-- Product Delivery -->
                <section class="prod-delivery pad-120">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Get the <span class="theme-clr"> fastest </span> product delivery </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Door-to-door delivery is a type of delivery service in which products <br>
                                    or parcels are delivered to customers directly from a business to<br>
                                     their homes or workplaces. It is a more efficient way of delivering<br>
                                      products, as it eliminates the need to transport the products<br>
                                       from the business to the customer's address.</p>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="assets/img/block/delivery.png" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Product Delivery -->
<?php 
include 'footer.php'
?>