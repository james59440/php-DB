<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 13:26
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

function associer(){

    global $conn;

    $IdEleves = $_POST['IdEleves'];
    $IdMug = $_POST['IdMug'];

    $sql = "INSERT INTO eleves_mugs VALUES (NULL ,'$IdEleves','$IdMug')";
    $conn->query($sql);

}

associer();