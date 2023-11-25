<?php
require("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

echo $email, $password;

$sql = "SELECT * FROM accounts WHERE password = '$password' AND email = '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    header("Location: dashboard.php");
    echo "<script>alert('Hello world!')</script>";

} else {
    echo "<script>alert('Account or password does not exist!')</script>";
}

mysqli_close($sql);
$conn -> close();
?>