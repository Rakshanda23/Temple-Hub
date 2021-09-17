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

<!-- for reg table  -->
<?php
// include('conn.php');

   
//     $view=mysqli_query($connect,"select id,user_name from registration_table ")
//     or die (mysqli_error($connect));


?>

<?php
include('conn.php');

   
    $display=mysqli_query($connect,"select id,user_name,havan,samagri,charity,date,price from donation_table ")
    or die (mysqli_error($connect));


?>

<!-- end reg table  -->

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

  


        <!-- login table start -->
        
<div class="row">
    <div class="col-md-2">

    </div>

   <div class="col-md-8">
        <form action="">
          <div style="color:white" class="table-responsive" >
          <table style="border:10px;" class="table table-bordered table-hover table-striped">
            <tr class="info">
                
              <th>SR.NO. </th>
              <th>USER NAME</th>
              <th>HAVAN</th>
              <th>SAMAGRI </th>
              <th>CHARITY </th>
              <th>DATE</th>
              <th>PRICE </th>
            </tr> 
            <?php
            $counter=0;
            while($row = mysqli_fetch_array($display))
            {
                extract($row);
            ?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $row['user_name'];?></td> 
                    <td><?php echo $row['havan'];?></td> 
                    <td><?php echo $row['samagri'];?></td> 
                    <td><?php echo $row['charity'];?></td> 
                    <td><?php echo $row['date'];?></td> 

                    <td><?php echo $row['price'];?></td> 

                </tr>
            <?php
            }
            ?>
             
            

            
          </table>
        </div>
        </form>
        </div><!---column ends-->



        </div><!--row-->
        <!-- login table end  -->
        <BR>
        <BR>
        <BR>


   
    
    <!-- //portfolio -->
    <?php

  include("footer.php");
  ?>

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

