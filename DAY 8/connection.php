<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=Agon", "root", "");

        // $username = "Ariana";
        // $password = password_hash("mypassword", PASSWORD_DEFAULT);
        // $email = "test@gmail.com";

        // $sql = "INSERT INTO users(username,password,email) VALUES ('$username', '$password', '$email')";

        // $sql= "ALTER table users ADD eamil VARCHAR(255)";

        $sql = "ALTER table users DROP COLUMN eamil";

        // $sql = "DROP TABLE PRODUCTS";
      
        $pdo->exec($sql);

        echo "New Tabel deleted succssefully";
    }catch(DOExecption $e){
        echo $e->getMessage();
    }



?>