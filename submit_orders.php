<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $colors = htmlspecialchars($_POST['colors']);
    $totalCost = htmlspecialchars($_POST['totalCost']);
    $orderDateTime = date('Y-m-d H:i:s');

    $orderDetails = [
        "name" => $firstName . ' ' . $lastName,
        "email" => $email,
        "address" => $address,
        "quantity" => $quantity,
        "colors" => $colors,
        "totalCost" => $totalCost,
        "orderDateTime" => $orderDateTime,
    ];

    $filePath = 'orders.json';
    $orders = [];
    
    if (file_exists($file[_{{{CITATION{{{_1{](https://github.com/buribalazs/smooth-drag-order/tree/7b40d21d076c3e31765f61481f537beaf4c5ec9f/README.md)[_{{{CITATION{{{_2{](https://github.com/mjengman/apartment-search/tree/0f0b62023b631a25c87137c52a16ecbb3ecf7985/orientation%2Fsignin.php)
