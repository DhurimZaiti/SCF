<?php 
include_once('config.php');

if(isset($_POST['submit'])) {
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_subject = $_POST['contact_subject'];
    $contact_message = $_POST['contact_message'];

    $sql = "INSERT INTO contact (contact_name, contact_email, contact_subject, contact_message) VALUES (:contact_name, :contact_email, :contact_subject, :contact_message)";
    // selct all from date where date == not null??
    $insertSql = $conn->prepare($sql);

    $insertSql->bindParam(':contact_name', $contact_name);
    $insertSql->bindParam(':contact_email', $contact_email);
    $insertSql->bindParam(':contact_subject', $contact_subject);
    $insertSql->bindParam(':contact_message', $contact_message);



    $insertSql->execute();
    header("Location: redirectContact.php");
    // add redirect page
}
?>