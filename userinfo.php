<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"connection sucesfull";
}else{
    echo"Connection Error";
}

mysqli_select_db($con, 'randomwebsitedata');

 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $comments = $_POST['comments'];

 $query = "insert into userinfodata(user,email,mobile,comments)
 values('$user', '$email', '$mobile', '$comment')";

 mysqli_query($con, $query);

 echo "$query";

 mysqli_query($con, $query);

 header('location: index.php');

?>