<?php
# fetching all published blogs
include 'db.php';


$sql = "SELECT * from scolarships";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy - Education Course Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

<!-- Top Header Area -->
<div class="top-header">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="header-content h-100 d-flex align-items-center justify-content-between">
                    <div class="academy-logo">
                        <a href="index.html"><img src="img/core-img/Eduafgan.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Area -->
<div class="academy-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="academyNav">

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="index.html">Home</a></li>     
                            <li><a href="#">Courses</a>
                                <ul class="dropdown">
                                    <li><a href="generalcourse.php">General</a></li>
                                    <li><a href="course.php">MOOCS</a></li>
                                    <li><a href="class10.php">Class 10</a></li>
                                    <li><a href="class11.php">Class 11</a></li>
                                    <li><a href="class12.php">Class 12</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="scolarship.php">Scolarships</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>

                <!-- Calling Info -->
                <div class="calling-info">
                    <div class="call-center">
                        <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Scolarships</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                        
                <?php 
                
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                echo    '<div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/blog-img/1.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->';

                                    echo '<a href="#" class="post-title">'.$row['stitle'].'</a>

                                    <div class="post-meta">';
                                    echo '<p>By '. $row['ssource'].'</p>
                                    </div>';
                                    echo '<p>'.$row["sdesc"].'</p>';
                                    echo '<a href='.$row["slink"].' class="btn academy-btn btn-sm mt-15">Read More</a>';
                                echo '</div>
                            </div>';
                }
                ?>
                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Services</h5>
                            <ul>
                                            <li><a href="generalcourse.php">General</a></li>
                                            <li><a href="course.php">MOOCS</a></li>
                                            <li><a href="class10.php">Class 10</a></li>
                                            <li><a href="class11.php">Class 11</a></li>
                                            <li><a href="class12.php">Class 12</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Sayed kashif</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>