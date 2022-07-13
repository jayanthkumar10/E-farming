<?php 
  $con = mysqli_connect('localhost', 'root', '', 'urop');
  $username = "";
  if (isset($_POST['submit'])) {
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $user=$_POST['username'];
    $age=$_POST['Age'];
    $mno=$_POST['Mob'];
    $pass=$_POST['Password'];

  	$sql_u = "SELECT * FROM login WHERE username='$user'";

  	$res_u = mysqli_query($con, $sql_u);
      //$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo "Sorry... username already taken"; 	
  	}else{
        $result=$con->query("INSERT INTO `register`(`firstname`, `lastname`, `username`, `age`, `mobile`, `password`) VALUES ('$fname','$lname','$user','$age','$mno','$pass')");

        $result1=$con->query("INSERT INTO `login`(`username`, `password`) VALUES ('$user','$pass')");
        
        if($result ==TRUE && $result1 ==TRUE){
           header('location:login.php');}
        else{
            echo "Failed";
        }
  	}	
 }

?>