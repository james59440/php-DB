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




$_POST = ['Nom','Prenom','Age'];



function affichall()
{

    global $conn;
    $sql = "SELECT id,prenom,nom,age from eleves";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "id =" . $row['id'] . " prenom =" . $row['prenom'] . " nom =" . $row['nom']." age =" . $row['age']. "<br><br>";


    }

}

affichall();
