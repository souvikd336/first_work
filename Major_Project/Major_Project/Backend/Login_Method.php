<?php  
require '../connection.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $Student_Id = mysqli_real_escape_string($conn,$_POST['S_Id']);
      $Student_Password = mysqli_real_escape_string($conn,$_POST['S_Pass']); 
      
      $sql = "SELECT `Student_Id` FROM `student_all` WHERE Student_Id = '$Student_Id' and Password = '$Student_Password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $Student_Id;
         header('Location: ../Frontend/after_login_index.php');
         /*if (condition) {
            # code...
         }*/


         //header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo '$error';
      }
   }
$conn->close();
?>