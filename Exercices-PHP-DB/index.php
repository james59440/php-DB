<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
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


















function ajouter ($prenom,$nom, $age){

    global $conn;
    $sql = "INSERT INTO eleves VALUES (NULL,'$prenom','$nom','$age')";
    $conn->query($sql);

}

ajouter("bryan", "bultot", "26");


function selectall()
{

    global $conn;
    $sql = "SELECT id,prenom,nom,age from eleves";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "id =" . $row['id'] . " prenom =" . $row['prenom'] . " nom =" . $row['nom']." age =" . $row['age']. "<br><br>";


    }

}

selectall();

function maj($id,$prenom,$nom,$age){
    global $conn;

    $sql = "UPDATE eleves SET id = '$id' ,prenom = '$prenom' , nom = '$nom' , age = '$age' WHERE id = 15";
    $conn->query($sql);


}
maj(15, "romain" , "bon" , 26);

function suppr($id){

    global $conn;
    $sql ="DELETE FROM eleves WHERE id = $id";
    $conn->query($sql);



}

suppr(23);



