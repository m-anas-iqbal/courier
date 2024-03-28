<?php 
include 'header.php'
?>
            <!-- Content Wrapper -->
            <article> 
                 <!-- Banner -->
            <section class="banner banner-style2 mask-overlay pt-120 white-clr">
                    <div class="pad-50 hidden-xs"></div>
                    <div class="container theme-container rel-div">
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">     <span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery </span> services </h2>
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
                                    <h2 class="section-title no-margin"> Payment </h2>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Payment</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->
<div class="container">
<ul class="payment-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-1.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-2.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-3.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-4.png" /> </a> </li>
                                </ul>
                                <div id="amountavil"></div>
</div>
                <!-- Payment -->
                <section class="contact-page pad-30">                    
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-8 col-sm-10 col-md-offset-1 contact-form">
                                <div class="calculate-form">
                                    <form class="row" method="POST" action="databaseConnection/insert.php" id="contact-form" backgrond="transparent">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-4"> <label class="title-2"> Total price: </label></div>
                                            <div class="col-sm-11"> <input type="number" readonly name="price" value="<?php if (isset($_SESSION['totalprice'])){echo $_SESSION['totalprice'];}else{header("Location:index.php");} ?>" id="price" required placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-4"> <label class="title-2"> Name: </label></div>
                                            <div class="col-sm-11"> <input type="text" name="Name" id="Name" required placeholder="Name" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-md-4"> <label class="title-2"> Account No: </label></div>
                                            <div class="col-sm-11"> <input type="number" name="acc_no"  id="acc_no" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Account No" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-4"> <label class="title-2"> Security Code: </label></div>
                                            <div class="col-sm-11"> <input type="password" name="pin" id="pin" placeholder="Pin code" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-4"> <label class="title-2"> Payment : </label></div>
                                            <div class="col-sm-11"> <input type="number" onkeyup="pay()" name="payment" id="payment"  required placeholder="Payment" class="form-control"></div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                        <?php if (isset($_SESSION['pricemsg'])){echo $_SESSION['pricemsg'];}?>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-11 col-xs-12 pull-right"> 
                                                <button style="margin-left:70px;"  name="submitpay" type="submit" id="submit_btn" class="btn-1"> Confirm Payment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Payment -->

            </article>
            <!-- /.Content Wrapper -->

            <script>
   function pay(){
      var acc_no = $("#acc_no").val();
      var pin = $("#pin").val();
    var payment = $("#payment").val();
    var price = $("#price").val();
  $.ajax({
    url: "databaseConnection/get_ajax.php",
    type:"POST",
    dataType:"html",
    data:{
        acc_no:acc_no,
        pin:pin,
        payment:payment,
        price:price,
    },
    
    success: function(result){
        console.log(result);
   $("#amountavil").html(result);
  },error: function(result){
    
   $("#amountavil").html(result);
  }
});
  };

</script>

            <?php 
            include 'footer.php'
            ?>