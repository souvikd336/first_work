<?php
require 'security.php';
$S_Id = $_SESSION['login_user'];
if ($S_Id != NULL) {
    require '../connection.php';
//TODO

$sql = "SELECT `Student_Name`,`Course_Name` FROM `student_all` WHERE Student_Id = '$S_Id'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $Course = $row['Course_Name'];
    $Name = $row['Student_Name'];
    if($Course == 'B-Tech')
    {
        $Destination_File = "Registration_Forms/B_Tech.php";
    }
    elseif ($Course =='M-Tech') {
        $Destination_File = "Registration_Forms/M_Tech.php";
    }
    elseif($Course =='Lateral'){
        $Destination_File = "Registration_Forms/Lateral.php";
    }
    elseif($Course =='MCA'){
        $Destination_File = "Registration_Forms/MCA.php";
    }
    elseif($Course =='MBA'){
        $Destination_File = "Registration_Forms/MBA.php";
    }
    elseif($Course =='BBA'){
        $Destination_File = "Registration_Forms/BBA.php";
    }
    elseif($Course =='BCA'){
        $Destination_File = "Registration_Forms/BCA.php";
    }
    elseif($Course =='BHM'){
        $Destination_File = "Registration_Forms/BHM.php";
    }
    else{
        echo 'error';
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Student area</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Techno India Group</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $Destination_File ?>">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Backend/Logout_Method.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="first_sec text-center text-white">
            <div class="first_sec-content">
                <div class="container px-5">
                    <div class="p-my"><img src="assets/img/TIG_2_2.png" alt="..." /></div>
                    <h1 class="first_sec-heading mb-0">Techno India Admission Portal</h1>
                    <h2 class="first_sec-subheading mb-0">Welcome <?php echo $Name ?></h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="<?php echo $Destination_File ?>">Register Now</a><br>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy;  Website 2022, Made by ,<a href="https://chat.whatsapp.com/H696J5Crcqs3QemmQWP9nj"> Souvik's team</a></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html> 