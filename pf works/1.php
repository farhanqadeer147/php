<html>
<body>

<form action="1.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "Welcome $name<br>";
    echo "Your email address is: $email";
}
?>

</body>
</html>