
<?php

require_once 'connect.php';

if($_POST) {
    $name = $_POST['name'];
    $img = $_POST['Image'];
    $cat = $_POST['categorie'];
    $des = $_POST['description'];
    $time = $_POST['eTime'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO allE (name, Image, categorie, description, eTime, cost) VALUES ('$name', '$img', '$cat','$des','$time','$cost' )";

    if($conn->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->conn_error;
    }

    $conn->close();
}

?>