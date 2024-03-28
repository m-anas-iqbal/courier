<?php 
include 'header.php';
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
                                    <h2 class="section-title no-margin"> contact us </h2>
                                    <p class="fs-16 no-margin"> Get in touch with us easily </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">contact</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Contact Us -->
                <section class="contact-page pad-30">                    
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-1">
                                <ul class="contact-detail title-2 pt-50">
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>pak numbers:</span> <p class="gray-clr"> +923002435144 <br> +923156702475 </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>usa numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Email address:</span> <p class="gray-clr"> courierin1@gmail.com <br>  </p> </li>
                                </ul>
                            </div>

                            <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                                <div class="calculate-form">
                                    <form class="row" action="databaseConnection/insert.php" method="POST" id="contact-form">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="name1" id="name1" placeholder="Name" class="form-control"> </div>
                                                                                       
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="email1" id="email1"placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="phone1" id="phone1" placeholder="Phone" required class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                            <div class="col-sm-9"> <textarea class="form-control" name="message1" placeholder="Message" id="Message" required cols="25" rows="3"></textarea> </div>
                                        </div>                                  
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <button name="submit" name="submit123" id="submit_btn" class="btn-1"> send message </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

                <!-- Contact Map -->
                <section class="map pt-80">
                    <div class="map-canvas">
                        <div id="map-canvas">
                        <iframe style="width:100%; height:550px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.139448255307!2d67.03085831427232!3d24.927318984022406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1657715964218!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" ></iframe><br>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Map -->

            </article>
            <!-- /.Content Wrapper -->

       

            <?php 
            include 'footer.php'
            ?>