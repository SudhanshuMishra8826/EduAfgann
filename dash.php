<?php


ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
#setcookie("name",$_POST['name'],time()+60);
session_start();
if (isset($_POST['name']) && isset($_POST["pass"])) {
    $_SESSION["user"] = $_POST['name'];
    $_SESSION["password"] = $_POST['pass'];

    $_SESSION["authuser"] = 0;

    include 'db.php';
    

    $sql = "SELECT pwd from users where uname=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION["user"]]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (($_SESSION["password"] == $row['pwd'])) {
        $_SESSION["authuser"] = 1;
    } else if ($_SESSION["authuser"] == 1) { } else {
        echo "<script>
       alert('Incorrect UserName or Password');
           window.location.href='login.php?type=0';
           </script>";
        exit();
    }
} elseif ($_SESSION["authuser"] == 1) { } else {
    header("Location:login.php?type=0");
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dash board</title>
    <link rel="stylesheet" type="text/css" href="dash1.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4 class="brand"><span style=" color: white;">Eduafgan
            </div>

            <ul class="list-unstyled components">
                 
                <li class="active">
                    <a href="dash.php">Home</a>
                     
                </li>
                <li class='dropdown-submenu'>
                    <a href="#">Books</a>
                    <ul class='list-unstyled components'>
                            <li><a tabindex="-1" href="addbooks.php?bookid=1">Class 10</a></li>
                            <li><a tabindex="-1" href="addbooks.php?bookid=2">Class 11</a></li>
                            <li><a tabindex="-1" href="addbooks.php?bookid=3">Class 12</a></li>
                            <li><a tabindex="-1" href="addbooks.php?bookid=5">General Books</a></li>
                    </ul>
                </li>
                <li>
                    <a href="addscholarship.php">Scholarship</a> 
                </li>
                <li>
                    <a href="addmoocs.php">MOOCs</a> 
                </li>
                <li>
                   <a href="login.php">Logout</a>
                </li>
                 
            </ul>


             
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                         
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php">Logout</a>
                            </li>
                             
                             
                        </ul>
                    </div>
                </div>
            </nav>
            <h2>Hello Admin !!!!</h2>
            <br>
            <table class="table table-borderless">
            <thead>
                <tr class="text-center" style="margin-top: 0px;  border-top: solid; border-color:#4db8ff;">
                <th colspan="2" scope="col">Your Details</th>      
                </tr>
            </thead>
            <tbody>

                <tr style="margin-top: 0px; border-top: solid; border-color:#4db8ff;">
                
                <td>Username : eduafgan</td>
                <td>Password : kashif</td>
                        
                </tr>
                
            </tbody>
            </table>

        </div>
    </div>









    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>