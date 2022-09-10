<?php
require_once'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>PHP operations using stored procedure</h3>
            <hr/>
            <a href="insert.php"><button class="btn btn-primary">Insert Data</button></a>
            <div class="table-responsive">
                <table id="data_table" class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                    </thead>

                    <tbody>
                        <?php
                        $sql = mysqli_query($con,"CALL read_data()");
                        $cnt = 0;
                        $row = mysqli_num_rows($sql);

                        if($row > 0)
                        {
                            while($result = mysqli_fetch_array($sql))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $result['first_name']; ?></td>
                                    <td><?php echo $result['last_name']; ?></td>
                                    <td><?php echo $result['contact_no']; ?></td>
                                    <td><?php echo $result['address']; ?></td>
                                </tr>
                                <?php
                                    $cnt++;
                            }
                        }
                        else{
                            ?>
                            <tr>
                                <td>No Record Found!</td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>