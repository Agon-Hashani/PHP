<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password=password_hash($tempPass,PASSWORD_DEAFULT);
}

if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password)){
    echo "You need to fill in all fields";
}else{
$sql="SELECT username FROM users WHERE username=:username";

$temoSQL=$conn->prepare($sql);
$temoSQL->bindParam(':username',$username);
$temoSQL->execute();

if($temoSQL->rowount()>0){
    echo "Username exists";
    header("refresh:2;url=signup.php");
}else{


$sql="INSERT INTO users (name,surname,username,email,password) VALUES (:name,:surname,:username,:email,:password)";
$insertSQL=$conn->prepare($sql);

$insert->bindParam(':username',$username);
$insert->bindParam(':name',$name);
$insert->bindParam(':surname',$surname);
$insert->bindParam(':email',$email);
$insert->bindParam(':password',$password);

$insert->execute();

echo"Data saved successfully...";
header("refresh:2;url=login.php");

}
}
    

?>