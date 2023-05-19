<?php
include 'connection.php';
$sql = " SELECT * FROM  practice ";
// $result = $mysqli->query($sql);
$result = mysqli_query($conn, $sql);
$conn->close();
?>









<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>fetch data from localStorage!</title>
</head>

<body>
 
  <br>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">name</th>
        <th scope="col">address</th>
        <th scope="col">contact_mumber</th>
        <th scope="col">cnic</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td >Farhan@gmail.com</td>
        <td>12345678</td>
        <td>Farhan</td>
        <td>house no 5A street 33w wahadat road lahore</td>
        <td>08009859848</td> 
        <td>3520238133151</td>
        <td> <button>Edit</button>
        <button>delete</button></td>
       

      </tr>
      <!-- <tr>
        <th scope="row"></th>
        <td id = "firstname"></td>
        <td id="lastname"></td>
        <td id="email"></td>
        <td id="id"></td>
        <td id="image"></td>
        <td id="address"></td>

      </tr> -->

      <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['contact_number'];?></td>
                <td><?php echo $rows['cnic'];?></td>
                <td><?php echo $rows['address'];?></td>
           
      <td>  
      <a href="edit.php?id=<?php echo $rows['id'];?>"><button>edit</button></a>
    </a>
    <a href="delete.php?id=<?php echo $rows['id'];?>"><button>delete</button></a>
    </a>


 
    <!-- <a href="delete.php">
     <button>delete</button>
    </a> -->
    
    </td>
                
            </tr>
            <?php
                }
            ?>
    </tbody>
  </table>
  <a href=""></a>
  


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>