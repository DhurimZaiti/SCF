<?php 
include_once('config.php');

if(isset($_POST['submit'])) {
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $contact_date = $_POST['contact_date'];
    $contact_inquiry = $_POST['contact_inquiry'];

    $sql = "INSERT INTO contact (contact_name, contact_email, contact_phone, contact_date, contact_inquiry) VALUES (:contact_name, :contact_email, :contact_phone, :contact_date, :contact_inquiry)";
    // selct all from date where date == not null??
    $insertSql = $conn->prepare($sql);

    $insertSql->bindParam(':contact_name', $contact_name);
    $insertSql->bindParam(':contact_email', $contact_email);
    $insertSql->bindParam(':contact_phone', $contact_phone);
    $insertSql->bindParam(':contact_date', $contact_date);
    $insertSql->bindParam(':contact_inquiry', $contact_inquiry);

    $insertSql->execute();
    header("Location: redirectAppointment.php");
}
?>