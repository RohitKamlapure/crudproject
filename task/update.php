<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from student where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$class=$row['class'];
$addmission=$row['addmission'];
$dob=$row['dob'];
$address=$row['address'];
$pincode=$row['pincode'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $addmission=$_POST['addmission'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];

    $sql="update student set id=$id,name='$name',class='$class',addmission='$addmission',dob='$dob',address='$address',pincode='$pincode' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
     <div class="container my-5">
      <form method="post">
       <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
      </div>
      <div class="form-group">
       <label>class name</label>
       <input type="text" class="form-control" placeholder="Enter your class name" name="class" autocomplete="off"  value=<?php echo $class;?>>
      </div>
      <div class="form-group">
       <label>date of admissio</label>
       <input type="date" class="form-control" placeholder="Enter date of addmission" name="addmission" autocomplete="off"  value=<?php echo $addmission;?>>
      </div>
      <div class="form-group">
       <label>date of birth</label>
       <input type="date" class="form-control" placeholder="Enter your date of birth" name="dob" autocomplete="off"  value=<?php echo $dob;?>>
      </div>
      <div class="form-group">
       <label>address</label>
       <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off"  value=<?php echo $address;?>>     </div>
      <div class="form-group">
       <label>pincode</label>
       <input type="text" class="form-control" placeholder="Enter your pincode" name="pincode" autocomplete="off"  value=<?php echo $pincode;?>>
      </div>
    <button class="btn btn-primary" type="submit" name="submit">Update</button>
    </form>
     </div>
  </body>
</html>