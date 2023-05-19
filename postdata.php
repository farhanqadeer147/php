<?php
include 'connection.php';


$first_name = $_POST['firstname'];
echo $first_name;
echo "<br>";
$last_name = $_POST['lastname'];
echo $last_name;
echo "<br>";
$ID = $_POST['ID'];
echo $ID;
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
    $sql = "INSERT INTO `practice`(`firstname`, `lastname`, `address`, `email`, `image`) 
    VALUES ('$first_name','$last_name','$Address','$email','$filename')";
  $result = mysqli_query($conn, $sql);

if ($result == TRUE) {

  echo "New record created successfully.";

}else{

  echo "Error:". $sql . "<br>". $conn->error;

} 
// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}


$conn->close(); 


?>