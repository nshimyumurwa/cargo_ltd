<?php
include ('header.php');
include ('connection.php');

?>

<form>

</form>



<div class="box1">
    <h3>ALL FURNITURE</h3>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">New Furniture</button>
</div>
<?php
if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . " </h6>";
}

// if (isset($_GET['message2'])) {
//     echo "<h5>" . $_GET['message2'] . " </h5>";
// }
if (isset($_GET['message4'])) {
    echo "<h6>" . $_GET['message4'] . " </h6>";
}
if (isset($_GET['message3'])) {
    echo "<h5>" . $_GET['message3'] . " </h5>";
}
?>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>F-ID</th>
            <th>F-Name</th>
            <th>F-Owner</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        
        $select_query = "SELECT * FROM furniture";
        $result = mysqli_query($conn, $select_query);
        
        if(!$result){
               die("Failed to get furniture data from database " . mysqli_error($conn));
        }else{
            //print the result to user-interface
            while($row = mysqli_fetch_assoc($result)){
                ?>
        <tr>
            <td><?php echo $row['furnitureId']?></td>
            <td><?php echo $row['furnitureName']?></td>
            <td><?php echo $row['furnitureOwnerName']?></td>
            <td colspan="2">
                <a href="update.php?id=<?php echo $row['furnitureId'] ?>" class="btn btn-success">Update</a>
                <a href="backend.php?delete_id=<?php echo $row['furnitureId'] ?>"  class="btn btn-danger">Delete</a>
            </td>
        </tr>
                <?php
            }
        }
        ?>


    </tbody>
</table>

<!-- Modal -->
<form method="post" action="backend.php">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add furniture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

    <div class="form-group">
        <label> F-Name </label>
        <input type="text" class="form-control" placeholder="Furniture Name" name="furnitureName" required>
    </div>

    <div class="form-group">
        <label> F-Owner </label>
        <input type="text" class="form-control" placeholder="Furniture Owner Name" name="furnitureOwnerName" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="add_furniture" class="btn btn-success" value="Add Furniture">
    </div>
          </div>
        </div>
    </div>
</form>

<?php
include ('footer.php');
?>