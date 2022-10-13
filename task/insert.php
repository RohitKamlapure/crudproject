<?php
include "connect.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $addmission=$_POST['addmission'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    

    if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo '<script type="text/javascript">';
        echo ' alert("Only letters and white space allowed")';  
        echo '</script>';
    }elseif(is_numeric(trim($pincode)) == false){
        echo '<script type="text/javascript">';
        echo ' alert("not valid pincode")';  
        echo '</script>';
    }else{
        $sql="insert into student (name,class,addmission,dob,address,pincode) value('$name','$class','$addmission','$dob','$address','$pincode')";
        $query = mysqli_query($con,$sql);
        header('location:user.php');
    }
  }

//extract($_POST);

//if(isset($_POST['submit'])){

//}
?>