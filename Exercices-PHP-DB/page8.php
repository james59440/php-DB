<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 14:09
 */
$servername = "localhost";
$username = "id7331060_james";
$password = "";
$dbname = "id7331060_bruhhh";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else{
    $conn->select_db($dbname);
}



function lesdeux() {

    global $con ;

    $IdEleves = $_POST['IdEleves'];
    $IdMug = $_POST['IdMug'];

    $Sql = "SELECT * from `eleves_mugs`";
     $result = $con->query($Sql);

    while ($row = $result->fetch_assoc()) {
        echo "id =" . ' ' . $row['id'] . ' ' . " id eleve =" . ' ' . $row['IdEleves'] . ' ' . "id mug =" . ' ' . $row['IdMug']. '<br>';
    }
};
lesdeux() ;