<?php
require("server/server.php");

$fullname = $_POST['name'];
$email = $_POST['Email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM accounts WHERE email = '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Account Already Exists')</script>";
    $conn -> close();
} else {
    $sql2 = "INSERT INTO accounts (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";
    if (mysqli_query($conn, $sql2)) {
        echo "<script>alert('You have succesfully registered!')</script>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn); 
        header("Location: login.php");
    }
    $conn -> close();
}

?>