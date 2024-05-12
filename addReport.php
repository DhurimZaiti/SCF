<?php 
include_once('config.php');

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $message = $_POST['message'];
    $datetime = $_POST['datetime'];
    $location = $_POST['location'];

    $sql = "INSERT INTO report (id, message, datetime, location) VALUES (:id, :message, :datetime, :location)";
    // selct all from date where date == not null??
    $insertSql = $conn->prepare($sql);

    $insertSql->bindParam(':id', $id);
    $insertSql->bindParam(':message', $message);
    $insertSql->bindParam(':datetime', $datetime);
    $insertSql->bindParam(':location', $location);



    $insertSql->execute();
    header("Location: redirectReport.php");
}
?>