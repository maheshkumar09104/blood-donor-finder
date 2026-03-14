<?php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // Local XAMPP database
    $conn = mysqli_connect("localhost", "root", "", "blood_donor");
} else {
    // Online InfinityFree database
    $conn = mysqli_connect("sql104.infinityfree.com", "if0_41390024", "your_password", "if0_41390024_blood_donor");
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
