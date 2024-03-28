<?php 
include 'header.php'
?>

  
            <!-- Content Wrapper -->
            <article> 
                 <!-- Banner -->
            <section class="banner banner-style2 mask-overlay pt-120 white-clr">
                    <div class="pad-50 hidden-xs"></div>
                    <div class="container theme-container rel-div">
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"><span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery </span> services </h2>
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
                                    <h2 class="section-title no-margin"> product tracking </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Track</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Tracking -->
                <section class="pt-50 pb-120 tracking-wrap">    
                    <div class="theme-container container ">  
                        <div class="row pad-10">
                            <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7">
                                        <div class="form-group">
                                            <input type="number" class="form-control box-shadow" id="couerierno" name="couerierno" required placeholder="Enter your product ID">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="form-group">
                                            <button type="submit" name="trace" id="trace" onclick="trace()" class="btn-1">track</button>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="row" id="data">
                        </div>
                    </div>
                </section>
                <!-- /.Tracking -->

            </article>
            <!-- /.Content Wrapper -->
     <script>
          $(document).ready(function(){
var koopId = sessionStorage.getItem("id");
$("#couerierno").val(koopId);
// koopId = "asd";
if (koopId !== null && koopId !== '') {
$('#trace').trigger('click');
sessionStorage.clear();
}
});

function trace(){
 couerierno = $("#couerierno").val();
if (couerierno!==null&& couerierno !== '') {
    // alert(couerierno)
    $.ajax({
    url: "databaseConnection/select.php",
    type:"POST",
    dataType:"html",
    data:{
        couerierno:couerierno,
    },
    success: function(result){
        console.log(result)
   $("#data").html(result);

  },error: function(result){
    alert("error msg");
    console.log(result)
  }
});
}
  
  }
     </script>

<?php 
include 'footer.php'
?>