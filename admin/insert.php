<?php
session_start();
     error_reporting(E_ALL^E_WARNING);
    require_once "connection.php";

//! insert books

if (isset($_POST['insertBook'])){
    $name       =   mysqli_real_escape_string($conn, $_POST['name']);
    $book       =   mysqli_real_escape_string($conn, $_POST['bookName']);
    $author     =   mysqli_real_escape_string($conn, $_POST['author']);
    $ISBN       =   mysqli_real_escape_string($conn, $_POST['isbn']);
    $profile    =   mysqli_real_escape_string($conn, $_POST['file']);
    $details    =   mysqli_real_escape_string($conn, $_POST['details']);

    if (empty($name) || empty($book) || empty($author) ||
    empty($ISBN) || empty($details)){
        echo 'please fill all fields';
        die();
    }

    $sql    =   "INSERT INTO books(adminName, bookName, authorName, ISBN, bookProfile,details)
                VALUE(' $name ', ' $book', '$author', '$ISBN', '$profile', '$details')";

    if (mysqli_query($conn,$sql)){

        header("Location:dashbord.php");

        echo "<script>
        function myFunction() {
        alert('Hello! I am an alert box!');
        }
        </script>";
        exit;
    }else{
        echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
    };
};


//! insert persons

if (isset($_POST['admin'])){
    $name       =   mysqli_real_escape_string($conn, $_POST['name']);
    $uName       =   mysqli_real_escape_string($conn, $_POST['uName']);
    $email    =   mysqli_real_escape_string($conn, $_POST['email']);
    $password       =   mysqli_real_escape_string($conn,md5($_POST['password']));
    $retype    =   mysqli_real_escape_string($conn, $_POST['retype']);
    $gender    =   mysqli_real_escape_string($conn, $_POST['gender']);
    $phone    =   mysqli_real_escape_string($conn, $_POST['phone']);
    $idNumber    =   mysqli_real_escape_string($conn, $_POST['idNumber']);



    if (empty($name) || empty($uName) || empty($email) ||
    empty($password) || empty($retype) || empty($gender)
    || empty($phone) || empty($idNumber)){
        // header("Location:index.php");
        echo 'please fill all fields ';
        die();
    }elseif(!preg_match("/^[a-zA-Z]*$/",$name)||!preg_match("/^[a-zA-Z]*$/",$uName)){
        // header("Location:signup.php");
        echo "<script>alert('use letters for name and username')</script>";
        die();
    }elseif($password !== $retype && strlen($password) <8){
        echo "<script>alert('passwords does not match')</script>";
        // header("Location:signup.php");
        // echo 'passwords does not much';
        die();
    }elseif(!preg_match("/^[0-9]*$/",$phone) && strpos($phone,"254") !== "0"){
        header("Location:signup.php");
        echo 'Phonenumber must be a number';
        die();
    }
    if (isset($_POST ["address"])) if ($_POST ["address"] != "") { echo "Your form submission has an error."; exit; }

    $sql    =   "INSERT INTO `admin`(`admin_name`,`user_name`, `email`, `password`,`gender`,`phone_number`,`id_number`)
                VALUE(' $name ', ' $uName', '$email', '$password', '$gender', '$phone', '$idNumber')";

    if (mysqli_query($conn,$sql)){

        header("Location:index.php");

        echo "added successfully";
        exit;
    }else{
        echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
    };
};

//! adminsign

if (isset($_POST['signIn'])){
    $uName       =   mysqli_real_escape_string($conn, $_POST['uName']);
    $password       =   mysqli_real_escape_string($conn,md5($_POST['password']));



    if (empty($uName) || empty($password)){
        header("Location:index.php");
        echo 'please fill all fields';
        die();
    }
    // $sql= "SELECT user_name, password FROM `admin` WHERE user_name = username and password = :password";
    // $result =mysqli_query($conn,$sql);

    // if (mysqli_num_rows($result)){

    //     $row=mysqli_fetch_assoc($result);
    //         if($uName != $row['username']){
    //         header("Location:index.php");
    //         echo 'Invalid username or password';
    //         die();
    //         }else{
    //         if ($row [':password'] == $password){
    //         header("Location:dashbord.php");
    //         }else{
    //             header("Location:index.php");
    //             echo 'Invalid username or password';
    //             die(".$result. " . mysqli_error ($conn));
    //         }
    //         }
    //     }
    // }
    $mysql1 = "SELECT `user_name`, `password`FROM `admin` WHERE `id` like '.$uName'";
    $result = mysqli_query($conn, $mysql1);
    mysqli_store_result($conn);
    $numrows = mysqli_num_rows($result);
        $_SESSION['Login succesful'];
if ($numrows > 0) {

      echo "Login succesful";

}
      else {
              header("Location:dashbord.php");
            echo "User not found or invalid credentials";
}
}