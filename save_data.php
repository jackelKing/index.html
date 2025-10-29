<?php
$data_file = "/mnt/data/data.txt";

if (!file_exists(dirname($data_file))) {
    mkdir(dirname($data_file), 0755, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');
    $age = htmlspecialchars($_POST['age'] ?? '');

    $data = "Name: $name | Email: $email | Password: $password | Age: $age\n";

    if (file_put_contents($data_file, $data, FILE_APPEND | LOCK_EX)) {
        echo "<h2 style='color: green; text-align: center;'>Registration Successful!</h2>";
        echo "<p style='text-align: center;'><a href='index.html'>Go Back</a></p>";
    } else {
        echo "<h2 style='color: red; text-align: center;'>Error: Could not save data.</h2>";
    }
} else {
    echo "<h2 style='color: red; text-align: center;'>Invalid Request</h2>";
}
?>
