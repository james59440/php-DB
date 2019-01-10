<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 11:17
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



function add (){

    global $conn;

    if (isset($_POST['Mug']) !='' && isset($_POST['addMug']))

        $mug = $_POST['Mug'];


    $sql = "INSERT INTO mugs VALUES (NULL ,'$mug')";
    $conn->query($sql);

}
add();
