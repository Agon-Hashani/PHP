<?php
    session_start()

$localhost = 'localhost';
$dbname = 'db';
$user = 'root';
$password ='';


try{
    $conn = new PDO("mysql:host=$localhost; dbname=$dbname", $user, $password);
    echo "Connection Sucssesfull";
} catch(Exception $e){
    echo "Something went wrong";
}



?>