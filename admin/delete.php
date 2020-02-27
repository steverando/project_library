<?php
    require_once "connection.php";


$sql = "DELETE FROM books WHERE id='?'";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
<td><button class='btn btn-danger' name='delete' onclick='ConfirmDelete()' type='button'>DELETE</button></td>
