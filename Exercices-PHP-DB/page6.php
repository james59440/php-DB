<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 11:33
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

function maj(){
    global $conn;

    if (isset($_POST['Mug']) != '' &&($_POST['Id'] !='' && isset($_POST['modifMug'])))

        $mug = $_POST['Mug'];
    $id = $_POST['Id'];



    $sql = "UPDATE mugs SET description = '$mug' WHERE id = $id";
    $conn->query($sql);


}
maj();