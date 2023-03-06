<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    // print_r( $id);
    $sql = "delete from `crud` where id=$id" ;
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }
    else{
        echo "Not deleted succesfully";
    }
}
?>