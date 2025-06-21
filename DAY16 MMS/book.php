<?php
    session_start();
    include_once 'config.php';

    $user_id = $_SESSION['id'];
    $movie_id = $_POST['movie_id'];

    $nr_ticktets = $_POST['nr_tickets'];
    $data = $_POST['data'];
    $time = $_POST['time'];

    $sql = "INSERT INTO    booking(user_id, movie_id, nr_tickets, data, time) VALUES (:user_id, :movie_id, :nr_tickets, :data, :time)";

     $insertBooking = $conn->prepare($sql);

        $insertBooking->bindParam(':user_id',   $user_id);
        $insertBooking->bindParam(':movie_id',   $movie_id);
        $insertBooking->bindParam(':nr_tickets',     $nr_tickets);
        $insertBooking->bindParam(':data', $data);
        $insertBooking->bindParam(':time', $time);

         $insertBooking->execute();

         header("Location: home.php")
?>