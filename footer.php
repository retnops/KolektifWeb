<footer>
        <div class="container">
            <div class="row footer-top-w3layouts-agile">
                <div class="col-lg-3 footer-grid" data-aos="zoom-in">
                    <div class="footer-title">
                        <img src="images/gus_logo.png">
                    </div>
                    <br>
                    <div class="footer-office-hour">
                        <ul>
                            <li class="hd">Phone: +62-21-25557010</li>
                            <li class="hd">Email: sales@gus.co.id</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid" data-aos="zoom-in" style="border-left: 2px solid white; border-right: 2px solid white; padding-left: 30px">
                    <div class="footer-title">
                        <h3>PT. Graha Unika Sejahtera</h3>
                    </div>
                    <div class="footer-office-hour">
                        <ul>
                            <li>Kresna Tower, 6th Floor</li>
                            <li>18 Parc Place, SCBD</li>
                            <li>Jl. Jend. Sudirman Kav. 52-53</li>
                            <li>Jakarta 12190</li>
                            <li><a href="https://www.google.co.id/maps/place/Kresna+Tower/@-6.2300484,106.8082019,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f15a49ceae23:0x62abb295d681d3fe!8m2!3d-6.2300537!4d106.810396?hl=en" style="color: #03cce6; font-weight: bold;">Map it!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 footer-grid" data-aos="zoom-in" style="padding-left: 20px">
                    <div class="footer-title">
                        <h3>Contact Us</h3>
                    </div>

                    <form id="contact-form" method="post" class="form" role="form" action="contact.php">
                        <div class="messages"></div>

                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="form_name" name="name" placeholder="Name" type="text" required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="form_email" name="email" placeholder="Email" type="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject"><p>Select subject:</p></label>
                            <select class="form-control" id="subject" name="subject">
                <option>Ask for brochure</option>
                <option>Ask for application demo</option>
                <option>Other</option>
              </select>
                        </div>
                        <textarea class="form-control" id="form_message" name="message" placeholder="Message" rows="3" required="required"></textarea>
                        <br />
                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <input type="submit" class="btn btn-primary pull-right" value="Send message"><!-- 
                                <button class="btn btn-primary pull-right" type="submit">Submit</button> -->
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    <!---->
    <div class="copyright">
        <div class="container">
            <div class="copyrightbottom" data-aos="fade-right" style="opacity: 1; margin-left: 15px">
                <p>© 2018 PT. Graha Unika Sejahtera All Rights Reserved
                </p>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- simpleLightbox -->
    <script src="js/simpleLightbox.js"></script>
    <script>
        //$('.proj_gallery_grid a').simpleLightbox();
    </script>
    <!-- //simpleLightbox -->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

    <!-- //flexSlider -->

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- /js files -->
    <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <script src='js/aos.js'></script>
    <script src="js/aosindex.js"></script>
    <!-- //js files -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <script type="text/javascript">
        $(document).ready(function() {
            /*
                        var defaults = {
                            containerID: 'toTop', // fading element id
                          containerHoverID: 'toTopHover', // fading element hover id
                          scrollSpeed: 1200,
                          easingType: 'linear' 
                        };
                        */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;">
                          <span id="toTopHover" style="opacity: 1;"> </span>
                         </a>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>