


<?php

include_once('config.php');

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bottle_s = $_POST['bottle_s'];
    $bottle_m = $_POST['bottle_m'];
    $bottle_l = $_POST['bottle_l'];
    $city = $_POST['city'];

    // Calculate total price
    $totalPrice = ($bottle_s * 0.75) + ($bottle_m * 1) + ($bottle_l * 2);

    // Date one week from now
    $date = date('Y-m-d', strtotime('+1 week'));

    // Insert data into the database
    $sql = "INSERT INTO glass_bottle (name, email, bottle_s, bottle_m, bottle_l, city, total_price, meetup_date) VALUES (:name, :email, :bottle_s, :bottle_m, :bottle_l, :city, :total_price, :meetup_date)";
    $insertSql = $conn->prepare($sql);
    $insertSql->bindParam(':name', $name);
    $insertSql->bindParam(':email', $email);
    $insertSql->bindParam(':bottle_s', $bottle_s);
    $insertSql->bindParam(':bottle_m', $bottle_m);
    $insertSql->bindParam(':bottle_l', $bottle_l);
    $insertSql->bindParam(':city', $city);
    $insertSql->bindParam(':total_price', $totalPrice);
    $insertSql->bindParam(':meetup_date', $date);
    $insertSql->execute();



    // Redirect to confirmation page
    header("Location: redirectGB.php");
    exit;
}

?> 
