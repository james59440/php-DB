<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 09:56
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

    if (isset($_POST['Nom'])!= '' &&($_POST['Prenom']) != '' &&($_POST['Age'] != '' &&($_POST['Id'] !='' && isset($_POST['maj']))))
        $prenom = $_POST['Prenom'];
    $nom = $_POST['Nom'];
    $age = $_POST['Age'];
    $id = $_POST['Id'];

    $sql = "UPDATE eleves SET id = '$id' ,prenom = '$prenom' , nom = '$nom' , age = '$age' WHERE id = $id";
    $conn->query($sql);


}
maj();