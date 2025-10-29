<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $age = htmlspecialchars($_POST['age']);

    $data = "Name: $name | Email: $email | Password: $password | Age: $age\n";
    file_put_contents("data.txt", $data, FILE_APPEND | LOCK_EX);

    echo "<h2 style='color: green; text-align: center;'>Registration Successful!</h2>";
    echo "<p style='text-align: center;'><a href='index.html'>Go Back</a></p>";
} else {
    echo "<h2 style='color: red;'>Invalid Request</h2>";
}
?>
