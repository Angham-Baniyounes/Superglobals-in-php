<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $dbname="Sihon";
    $connect = mysqli_connect($server,$user,$pass,$dbname);
   if (isset($_POST['submit']))
   {
      if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['country']) && !empty($_POST['gender']) && !empty($_POST['password']))
      {
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $email=$_POST['email'];
          $country=$_POST['country'];
          $gender=$_POST['gender'];
          $paswrd=$_POST['password'];
          $queryCheckEmail= "SELECT * From userinfo Where (email = '$email')";
          $res=mysqli_query($connect,$queryCheckEmail);
          if (mysqli_num_rows($res) > 0)
          {
            $message = "This E-mail is already Signed Up";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Location:Home.php");
          }
          else
          {
          $queryInsertSignUp = "INSERT INTO userinfo (fName,lName,email,password,gender,country) 
          VALUES ('$fname','$lname','$email','$paswrd','$gender','$country')";
          $runInsertSignUp = mysqli_query($connect,$queryInsertSignUp);
            if ($runInsertSignUp)
            {
              header("Location:Home.php");
            }
            else
              echo "Error Inserting Data";
          }
      }
   }   
?>

	  