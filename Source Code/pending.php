<?php include("include/connect.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Console</title>
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5" onclick="window.location.href='admin.php';" style="float:right;">Back</button>
    <h2>Pending Customers </h2>
    <!-- <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form> -->
    
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "Select * from `users`";
        $result = mysqli_query($conn,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];
                $status=$row['status'];
                if($status == 0){
                    echo ' <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>
                    <button class="btn btn-warning"><a href="invoice.php?pid='.$id.'" class="text-light">Invoice</a></button>
                    <button class="btn btn-success"><a href="upload.php?uploadid='.$id.'" class="text-light">Upload</a></button>
                    </td>
                </tr>';
                }
            }
        }
        ?>
        
        </tbody>
    </table>
    </div>

</body>
</html>