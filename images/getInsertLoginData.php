<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $dbname="Sihon";
    $connect = mysqli_connect($server,$user,$pass,$dbname);
   if (isset($_POST['submit']))
   {
       $email=$_POST['email'];
       $pass=$_POST['password'];
       $queryLogin = "SELECT * From userinfo Where email = '".$email."' AND password = '".$pass."'";
       $Login=mysqli_query($connect,$queryLogin);
       if (mysqli_num_rows($Login) == 1)
       {   
        $queryGetUserId = "SELECT userId From userinfo Where email = '".$email."'";
        $getUserId=mysqli_query($connect,$queryGetUserId);  
        $row= mysqli_fetch_array($getUserId);
        $userId = $row['userId']; 
        $queryInsertLoginInfo = "INSERT INTO loginInfo (userId) VALUES ('$userId')";
        $insertLoginInfo=mysqli_query($connect,$queryInsertLoginInfo);
        header("Location:Store.php");
       }
       else if ($email=="" && $pass=="")
       {
        header("Location:Home.php");
       }
       else
       {
        $queryLoginDetect = "SELECT email From userinfo Where email = '".$email."'";
        $LoginDetect=mysqli_query($connect,$queryLoginDetect);
        if (mysqli_num_rows($LoginDetect) == 1)
        {
        echo "Wrong Password!";
        }
        else
        {
        echo "E-mail does not Exist!";
        }
       }
   }   
?>