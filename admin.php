<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Teens Hub People Category Flat Bootstrap Responsive website Template | Gallery :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Teens Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- gallery-->
    <link href="css/gallery.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>


<?php
include('conn.php');

   
    $view=mysqli_query($connect,"select id,user_name from registration_table ")
    or die (mysqli_error($connect));


?>

<body>
        <?php
        include('header1.php');
        ?>
    <!-- inner banner -->
    <section class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
      
    </section>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </nav> -->
    <pre>



        
   </pre>
<div class="row">
    <div class="col-md-3">

    </div>

   <div class="col-md-6">
        <form action="">
          <div style="color:white" class="table-responsive" >
          <table style="border:10px;" class="table table-bordered table-hover table-striped">
            <tr class="info">
                
              <th>SR.NO. </th>
              <th>USER NAME</th>
            </tr> 
            <?php
            $counter=0;
            while($row = mysqli_fetch_array($view))
            {
                extract($row);
            ?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <!-- <td><?php echo $row['id'];?></td> -->
                    <td><?php echo $row['user_name'];?></td> 
                    
                </tr>
            <?php
            }
            ?>
             
            

            
          </table>
        </div>
        </form>
        </div><!---column ends-->



        </div><!--row-->

   
    
    <!-- //portfolio -->
    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="container-fluid">
            <div class="row p-sm-4 px-3 py-5">
                <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a class="navbar-brand" href="index.html">
                            teens hub
                        </a>
                    </h2>
                    <p class="my-3 text-white">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio
                        cumque
                        nihil impedit quo minus</p>
                    <p class="text-white">
                        Id quod possimusapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper
                        varius
                        orci.
                    </p>
                </div>
                <div class="col-lg-2  col-md-6 mt-md-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Navigation</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="gallery.html">
                                    Gallery
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="services.html">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="about.html">
                                    Our Mission
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="index.html">
                                    Latest posts
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="index.html">
                                    Explore
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Contact Us</h3>
                        <hr>
                        <div class="fv3-contact">
                            <p>
                                <a href="mailto:example@email.com">info@example.com</a>
                            </p>
                        </div>
                        <div class="fv3-contact my-2">
                            <p>+456 123 7890</p>
                        </div>
                        <div class="fv3-contact">
                            <p>+90 nsequursu dsdesdc,
                                <br>xxx Street State 34789.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center bg-theme">
        <p class="text-white">© 2018 Teens Hub. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright --> 
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <script src="js/jquery.picEyes.js"></script>
    <script>
        $(function () {
            //picturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- //gallery -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
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
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    
</body>

</html>
