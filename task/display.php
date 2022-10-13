<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud opration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD USER</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">class name</th>
      <th scope="col">addmission date</th>
      <th scope="col">dob</th>
      <th scope="col">address</th>
      <th scope="col">pincode</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql="select * from student ";
     $result=mysqli_query($con,$sql);
     if($result){
       while( $row=mysqli_fetch_assoc($result)){
           $id=$row['id'];
           $name=$row['name'];
           $class=$row['class'];
           $addmission=$row['addmission'];
           $dob=$row['dob'];
           $address=$row['address'];
           $pincode=$row['pincode'];
           echo '    <tr>
           <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$class.'</td>
           <td>'.$addmission.'</td>
           <td>'.$dob.'</td>
           <td>'.$address.'</td>
           <td>'.$pincode.'</td>
           <td>
           <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
           <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
           </td>
         </tr>';
       }         
     }
    ?>
  </tbody>
</table>
</body>
</html>