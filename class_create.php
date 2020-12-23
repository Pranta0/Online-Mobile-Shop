<?php


if(isset($_POST['createclass'])){
  $Class_names=$_POST['class_names'];
  $Class_name=$_POST['class_name'];
  $class_numeric=$_POST['class_name_numeric'];
  $Section=$_POST['section'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "oder";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "INSERT INTO orders (name,email,phone,address)
  VALUES ('$Class_names','$Class_name','$class_numeric','$Section')";
  $quryrun=mysqli_query($conn,$sql);
  if($quryrun){
    echo "<script type='text/javascript'>alert('Order confirm Successfully.')</script>";
    //header('Location:index.html');
    echo "<script language='javascript' type='text/javascript'> location.href='index.html' </script>";

  }else{
   echo "<script type='text/javascript'>alert('Order does not Successfully.')</script>";
    //header('Location:index.html');
   echo "<script language='javascript' type='text/javascript'> location.href='index.html' </script>";
  }



}

 ?>
