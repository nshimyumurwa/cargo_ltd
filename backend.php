<?php
error_reporting(E_ALL);
ini_set('display', 1);

include("connection.php");

if(isset($_POST['add_furniture'])){
    $name = $_POST['furnitureName'];
    $owner = $_POST['furnitureOwnerName'];

    if($names == '' || empty(($names))){
        header('location:index.php?message= Plz make sure that all data is filled');
    }else{
    $query = "UPDATE `furniture` SET  `furnitureName`='$name' , `furnitureOwnerName`='$owner' where Id = $furnitureId";
    $result = mysqli_query($conn, $query);

    if($result){
        header("location:index.php?message3= Furniture Updated!");
    }else{
        die("Failed to insert furniture" . mysqli_error($conn));
    }
}

}

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    $query = "DELETE FROM `furniture` where `Id`= $id ";
    $result = mysqli_query($conn, $query);
    if($result){
        header("location:index.php?message4= Furniture deleted!");
    }else{
        die("Failed to delete furniture " . mysqli_error($conn));
    }
}

?>