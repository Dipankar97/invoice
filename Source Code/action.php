<?php 
include('include/connect.php');

if(isset($_GET['pid'])){
    $id=$_GET['pid'];
    
}

// if(isset($_GET['deleteid'])){
//     $id=$_GET['deleteid'];
//     $sql="delete from `users` where id=$id";
//     $result=mysqli_query($conn,$sql);
//     if($result){
//         header('location: view.php');
//     }
// }

?>
