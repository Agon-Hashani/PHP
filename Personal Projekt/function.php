<?php
function getStudents($pdo) {
    $stmt = $pdo->query("SELECT * FROM students");
    return $stmt->feachAll();
}
function getStudents($pdo,$id) {
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
function addStudent($pdo, $name, $email, $fee_due) {
    $stmt = $pdo->prepare("INSERT INTO students (name, email, fee_paid, fee_due) VALUES (?, ?, 0, ?)");
    $stmt->execute([$name, $email, $fee_due]);
}
?>