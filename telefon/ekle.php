<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $ikinci_telefon = $_POST['ikinci_telefon'];
    $email = $_POST['email'];
    $grup = $_POST['grup'];

    $stmt = $db->prepare("INSERT INTO rehber (ad, soyad, telefon, ikinci_telefon, email, grup) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$ad, $soyad, $telefon, $ikinci_telefon, $email, $grup]);

    header('Location: index.php');
    exit();
}
?>
