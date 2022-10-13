<?php
include 'connect.php';
include 'insert.php';
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
     <div class="container my-2">
     <button class="btn btn-primary my-2"><a href="display.php" class="text-light">BACK</a></button>
      <form id="myform" action="insert.php" method="post">
       <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
      </div>
      <div class="form-group">
       <label>class name</label>
       <input type="text" class="form-control" placeholder="Enter your class name" name="class" autocomplete="off" required>
      </div>
      <div class="form-group">
       <label>date of addmission</label>
       <input type="date" class="form-control" placeholder="Enter your date of addmission" name="addmission"  autocomplete="off" required>
      </div>
      <div class="form-group">
       <label>dob</label>
       <input type="date" class="form-control" placeholder="Enter your date of birth" name="dob"  autocomplete="off" required>
      </div>
      <div class="form-group">
       <label>address</label>
       <textarea type="text" class="form-control"  placeholder="Enter your address" name="address" autocomplete="off" required></textarea>
      </div>
      <div class="form-group">
       <label>pincode</label>
       <input type="text" class="form-control" placeholder="Enter your pincode" name="pincode" autocomplete="off" required>
      </div>
    <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit</button>
    </form>
     </div>
     <script type="text/javascript">
      $(document).ready(function(){
        var form = $('#myform');
        $('submit').click(function(){
          $.ajax({
            url: form.attr("action"),
            type: 'post',
            data: $("#myform input").serialize(),
            success: function(data){
              console.log(data);
            }

          });
        });
      });
     </script>
  </body>
</html>