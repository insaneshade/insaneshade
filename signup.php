<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "INSERT INTO form (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname', '$lastname', '$gender', '$num', '$address', '$email', '$password')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please input some valid information')</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="signup">
        <h1>Sign up</h1>
        <h4>it's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender </label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="text" name="pass" required>
            <input type="submit" name="" value="submit">
        </form>
        <p>Signup Button, you agree to our <br>
        <a href="">terms and conditions</a> and <a href="">Policy and Privacy</a>
        </p>
        <p>Already have an Account? <a href="#">Login here</a></p>
    </div>  
</body>
</html>