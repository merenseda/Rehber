<?php
include('db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $ikinci_telefon = $_POST['ikinci_telefon'];
    $email = $_POST['email'];
    $grup = $_POST['grup'];

    
    $stmt = $db->prepare("UPDATE rehber SET ad = ?, soyad = ?, telefon = ?, ikinci_telefon = ?, email = ?, grup = ? WHERE id = ?");
    $stmt->execute([$ad, $soyad, $telefon, $ikinci_telefon, $email, $grup, $id]);

   
    header('Location: index.php');
    exit();
}
?>
