<?php
$conn = mysqli_connect("localhost","root","","library");

if (!$conn){
    echo 'not connected';
}else{
    //echo 'connected';
}

if (isset($_post['update'])){
    $name       =   mysqli_real_escape_string($conn, $_POST['name']);
    $book       =   mysqli_real_escape_string($conn, $_POST['bookname']);
    $author     =   mysqli_real_escape_string($conn, $_POST['aname']);
    $ISBN       =   mysqli_real_escape_string($conn, $_POST['isbn']);
    $profile    =   mysqli_real_escape_string($conn, $_POST['file']);
    $details    =   mysqli_real_escape_string($conn, $_POST['details']);
    
    $mysqli->query("DELETE FROM books WHERE id=?") or die ($mysqli_error($mysqli));

}
if(isset($_post['delete'])){
    $name       =   mysqli_real_escape_string($conn, $_POST['name']);
    $book       =   mysqli_real_escape_string($conn, $_POST['bookname']);
    $author     =   mysqli_real_escape_string($conn, $_POST['aname']);
    $ISBN       =   mysqli_real_escape_string($conn, $_POST['isbn']);
    $profile    =   mysqli_real_escape_string($conn, $_POST['file']);
    $details    =   mysqli_real_escape_string($conn, $_POST['details']);

    $mysqli->query("DELETE FROM books WHERE id=?") or die ($mysqli_error($mysqli));
}