<?php

require_once 'connect.php';

if($_POST) {
    $name = $_POST['name'];
    $img = $_POST['Image'];
    $cat = $_POST['categorie'];
    $des = $_POST['description'];
    $time = $_POST['eTime'];
    $cost = $_POST['cost'];

    $id = $_POST['id'];

    $sql = "UPDATE allE SET name = '$name', Image = '$img', categorie  = '$cat', description ='$des' , eTime  = '$time', cost ='$cost' WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {
        echo "Erorr while updating record : ". $conn->error;
    }


    $conn->close();

}

 

?>