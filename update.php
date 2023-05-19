<?php
include 'connection.php';
$first_name = $_POST['firstname'];
echo $first_name;
echo "<br>";
$last_name = $_POST['lastname'];
echo $last_name;
echo "<br>";
$user_id = $_POST['id'];
echo $user_id;
echo "<br>";
$Address = $_POST['Address'];
echo $Address;
echo "<br>";
$email = $_POST['email'];
echo $email;
echo "<br>";
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "./images/" . $filename;
echo "<br>";
echo $filename;
echo "<br>";
echo $tempname;
echo "<br>";
echo $folder;

$sql = "UPDATE `practice` SET `firstname`='$first_name',`lastname`='$last_name',
`email`='$email',`image`='$filename', `address`='$Address' WHERE `id`='$user_id'"; 
$result = mysqli_query($conn, $sql);

if ($result == TRUE) {

    echo "Record updated successfully.";

}else{

    echo "Error:" . $sql . "<br>" . $conn->error;

}
 



?>