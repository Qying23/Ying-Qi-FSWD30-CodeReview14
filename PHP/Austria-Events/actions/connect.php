
<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cr14_ying_qi_bigevents";

// create connection
$conn = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($conn->conn_error) {
    die("connection failed: " . $conn->conn_error);

} else {
    // echo "Successfully Connected";

}

?>