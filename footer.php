
 <!-- Footer -->
 <footer>
                <div class="footer-main pad-120 white-clr">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6 footer-widget">
                            <a class="navbar-logo" href="index.php"> <img style="width:100px; margin-left:70px;" src="assets/img/logo/logo.png" alt="logo" /> </a>                                
                        </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">Courier</h2>
                                <ul>
                                     <li> <a href="index.php">Home</a> </li>
                                    <li> <a href="courier.php">Courier</a> </li>
                                    <li> <a href="tracking.php">Tracking</a> </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">About us</h2>
                                <ul>
                                    <li> <a href="about-us.php">About Us</a> </li>
                                    <li> <a href="contact-us.php">support</a> </li>
                                    <li> <a href="contact-us.php">Contact</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">Social media</h2>
                                <ul class="social-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="www.facebook.com" class="fa fa-facebook"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="www.twitter.com" class="fa fa-twitter"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="www.google.com" class="fa fa-google-plus"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="www.linkedin.com" class="fa fa-linkedin"></a> </li>
                                </ul>
                                <ul class="payment-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-1.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-2.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-3.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-4.png" /> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p> © Copyright 2022, All rights reserved </p>                            
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p> Designed and develop </span>  by <a href="https://iconicdev.co/" class="main-clr"> iconic dev </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /.Footer -->

        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong>CourierIn </strong> for getting all details </p>                        
                        <p style="color:red ; "><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}else{echo " ";}?></p>
                        <div class="login-form clrbg-before">
                            <form action="databaseConnection/select.php" class="login" method="POST">
                                <div class="form-group"><input type="text" placeholder="Email address" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" name="password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " name="login" type="submit"> Sign in now </button>
                                </div>
                            </form>
                            <a data-toggle="modal" href="#forget-popup" data-dismiss="modal" aria-label="Close" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a data-toggle="modal" href="#signup-popup" data-dismiss="modal" aria-label="Close" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a data-toggle="modal" href="#signup-popup" data-dismiss="modal" aria-label="Close" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

           <!-- Popup: signup -->
           <div class="modal fade login-popup" id="signup-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content" style="height:580px;overflow:scroll;">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign up </h2>
                        <p> Sign up to <strong> CourierIn </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form action="databaseConnection/insert.php" method="POST" class="login">
                                <div class="form-group"><input type="text" name="name" placeholder="name" class="form-control"></div>
                                <div class="form-group"><input type="email" name="email" placeholder="Email address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control"></div>
                                <div class="form-group"><input type="text" name="address" placeholder="Address" required class="form-control"></div>
                                <div class="form-group"><input type="text" name="phone" placeholder="Phone number" required class="form-control"></div>
                                <div class="form-group"><input type="password" name="password" placeholder="Password" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " name="signup" type="submit"> Sign up</button>
                                </div>
                            </form>
                            <a data-toggle="modal" href="#forget-popup" data-dismiss="modal" aria-label="Close" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a data-toggle="modal" href="#login-popup"  data-dismiss="modal" aria-label="Close" class="white-clr">I have an account? </a>  
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: signup --> 

           <!-- Popup: forget -->
           <div class="modal fade login-popup" id="forget-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> Forget </h2>       
                        <div class="login-form clrbg-before">
                            <form action="databaseConnection/select.php" class="login" method="POST">
                                <div class="form-group"><input type="email" placeholder="Enter Email address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control"></div>
                                
                                    <button class="btn-1 " type="submit"> Forget</button>
                                </div>
                            </form>
                            <a data-toggle="modal" href="#login-popup" data-dismiss="modal" aria-label="Close" class="gray-clr"><- back </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a data-toggle="modal" href="#signup-popup" data-dismiss="modal" aria-label="Close" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a data-toggle="modal" href="#signup-popup" data-dismiss="modal" aria-label="Close" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: forget --> 

         <!-- Popup: forget -->
         <div class="modal fade login-popup" id="newpassword-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3">New Password</h2>       
                        <div class="login-form clrbg-before">
                            <form action="databaseConnection/select.php" class="login" method="POST">
                                <div class="form-group"><input type="password" placeholder="New password" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Confirm password" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" class="form-control"></div>
                                    <button class="btn-1 " type="submit"> Forget</button>
                                </div>
                            </form>
                            <a data-toggle="modal" href="#forget-popup" data-dismiss="modal" aria-label="Close" class="gray-clr"><- back </a>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
      
        <!-- /Popup: forget --> 
<script>
  $(document).ready(function(){
  <?php if (isset($_SESSION['msg'])){ echo "$('#btn_login').trigger('click');"; session_destroy(); }?>

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    
    today = yyyy + '-' + mm + '-' + dd;
    $('#startdate').attr('min',today);
    
    $('#enddate').attr('min',today);
        })
        function sendEmail() {
        var orderno = sessionStorage.getItem("courierid");
            var reciver = sessionStorage.getItem("email");
            sessionStorage.clear();
	Email.send({
	Host: "smtp.gmail.com",
	Username : "courierin1@gmail.com",
	Password : "courierin!@#",
	To : reciver,
	From : "courierin1@gmail.com",
	Subject : "Dear customer",
	Body : "Thank you for your! you order# is "+orderno+"",
	}).then(
		message => alert(""+reciver+"at mail sent successfully");
	);
}
</script>
        <!-- / Search Popup -->

        <?php //if (isset($_SESSION['msg'])){ echo "<script>$('#btn_login').trigger('click')</script>"; session_destroy(); }?>
        <!-- Main Jquery JS -->
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>        
        <script src="https://smtpjs.com/v3/smtp.js"></script> 
        <!-- Bootstrap JS -->
        <script src="assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="assets/plugins/owl.carousel.2/owl.carousel.min.js" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="assets/js/jquery.sticky.js"></script>
        <!-- Wow JS -->
        <script src="assets/plugins/WOW-master/dist/wow.min.js" type="text/javascript"></script>   

        <!-- Slider JS -->        


        <!-- Theme JS -->
        <script src="assets/js/theme.js" type="text/javascript"></script>

    </body>
    
</html>
