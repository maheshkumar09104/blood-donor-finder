<?php

include "db.php";

$blood = $_POST['blood'];
$city = $_POST['city'];

$sql = "SELECT * FROM donors WHERE blood_group='$blood' AND city='$city'";

$result = mysqli_query($conn,$sql);

echo "<h2>Donor List</h2>";

while($row = mysqli_fetch_assoc($result))
{
echo "Name: ".$row['name']."<br>";
echo "Blood Group: ".$row['blood_group']."<br>";
echo "Phone: ".$row['phone']."<br>";
echo "City: ".$row['city']."<br><br>";
}

?>