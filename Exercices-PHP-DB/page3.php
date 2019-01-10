<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 14:05
 */$servername = "localhost";
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






function supprim(){

    global $conn;

    if (isset($_POST['Id'])!= '' && isset($_POST['supprimer']))
    $Id = $_POST['Id'];

    $sql ="DELETE FROM eleves WHERE id = $Id";
    $conn->query($sql);


}


supprim();