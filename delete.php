<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `practice` WHERE `id`='$user_id'";

    $result = mysqli_query($conn, $sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 