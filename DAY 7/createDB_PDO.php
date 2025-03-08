<?php
$host = "localhost";
$user = "root";
$pass = "";


try{
    $conn = new PDO("mysql:host=$host;",$user,$pass);

    $sql = "CREATE DATABASE  agon";

    $conn ->exec($sql);

    echo"Database created";
}catch(Exception $e){

    echo " Something went wrong ";
}

?>