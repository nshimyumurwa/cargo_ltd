<?php
include('header.php');
include('connection.php');

if(isset($_GET['furnitureId'])){
    $id = $_GET['furnitureId'];
    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM furniture WHERE Id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if(!$result){
        die("Failed to get furniture from database" . mysqli_error($conn));
    }else{
        $row = $result->fetch_assoc();
    }
}

?>

<div class="container">
    <form action="backend.php" method="post">
        <div class="form-group">
            <label>Furniture Name</label>
            <!-- Corrected the value attribute -->
            <input type="hidden" name="furnitureId" value="<?php echo $row['furnitureId']?>">
            <input type="text" name="furnitureName"  class="form-control" placeholder="Furniture name" value="<?php echo $row['furnitureName']?>">

        </div>
        <div class="form-group">
            <label>Furniture Owner</label>
            <input type="text" name="furnitureOwnerName" class="form-control" placeholder="Furniture Owner" value="<?php echo $row['furnitureOwnerName']?>">
        </div>
    </form>
</div>
<?php

include('footer.php');
?>
