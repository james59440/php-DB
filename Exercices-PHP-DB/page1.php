<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:24
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

    if (isset($_POST['Nom'])!= '' &&($_POST['Prenom']) != '' &&($_POST['Age'] !='' && isset($_POST['ajouter'])))

        $prenom = $_POST['Prenom'];
    $nom = $_POST['Nom'];
    $age = $_POST['Age'];



    $sql = "INSERT INTO eleves VALUES (NULL ,'$prenom','$nom','$age')";
    $conn->query($sql);

}
add();



















