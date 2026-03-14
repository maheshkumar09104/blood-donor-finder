<?php

include "db.php";

$name = $_POST['name'];
$blood = $_POST['blood'];
$phone = $_POST['phone'];
$city = $_POST['city'];

$sql = "INSERT INTO donors(name,blood_group,phone,city)
VALUES('$name','$blood','$phone','$city')";

if(mysqli_query($conn,$sql)){
    echo "Donor Registered Successfully";
    echo '<br><a href="index.html"><button>Back to Home</button></a>';
}
else{
    echo "Error";
}

?>