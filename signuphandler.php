<?php
$firstname=$lastname=$email=$password='';
include 'config.php';
session_start();

if(isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password_1'];
    #grab the firstname
    if (empty($firstname)) {
        header('location:signup.php?f_err');
        exit();
    } else {
        $firstname = $firstname;
    }

    if (empty($lastname)) {
        header('location:signup.php?l_err');
        exit();
    } else {
        $lastname = $lastname;
    }

    if (empty($email)) {
        header('location:signup.php?e_err');
        exit();
    } else {
        $email = $email;
    }


    if (empty($password)) {
        header('location:signup.php?p1_err');
        exit();
    } else {
        $password = md5($password);
    }
}
#fetch a user from the database who has the same firstname or email
#limit the returned results to()1
$sql = "SELECT *FROM `users2` WHERE `firstname`='$firstname'OR email='$email' LIMIT 1 ";
#store the returned data from the database in a variable called results
$results = mysqli_query($conn, $sql);

#convert results into assoc array for better data management with php
$user = mysqli_fetch_assoc($results);

#if the user is found redirect to the signup page with an error message
# saying the user with firstname already exists

if ($user){
    header('locaton:signup.php?user_error');
}
#if there is no error

$sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `password`)
        VALUES (null,'$firstname','$lastname','$email','$password')";

#Save user to the databse
#first check if insertion to the db is successfull
#mysqli_query($conn, $sql)
if(mysqli_query($conn,$sql)){
    #if user is added successfully
    echo "User added to the db successfully";
    $_SESSION['email'] = $email;
    header("location:index.php");
}else{
    #if adding user is unsuccessfull
    echo "Failed to add user to the db";
}


?>


















