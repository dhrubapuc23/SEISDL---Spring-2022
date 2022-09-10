<?php
require_once'dbcon.php';
if(isset($_POST['insert']))
{
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $contact = $_POST['contactNo'];
    $address = $_POST['address'];

    $sql = mysqli_query($con,"CALL insert_val('$fname','$lname','$contact','$address')");

    if($sql)
    {
        echo "<script>alert('Data inserted successfully!');</script>";
    }
    else
    {
        echo "<script>alert('Error!');</script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form action="" method="post" name="insertForm">

    <div class="row">
        <div class="col-md-12">
            <h4>Software Engineering and Information System Design Lab</h4>
            <hr/>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <b>First Name</b>
                <input type="text" name="firstName" class="form-control" required autocomplete="off">
            </div>
            <div class="col-md-4">
                <b>Last Name</b>
                <input type="text" name="lastName" class="form-control" required autocomplete="off">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <b>Contact No.</b>
                <input type="text" name="contactNo" class="form-control" required autocomplete="off">
            </div>
            <div class="col-md-4">
                <b>Address</b>
                <input type="text" name="address" class="form-control" required autocomplete="off">
            </div>
        </div>

        <div class="row" style="margin-top:2%">
            <div class="col-md-8">
                <input type="submit" value="Save" name="insert">
            </div>
        </div>
    </form>
</div>
</body>
</html>