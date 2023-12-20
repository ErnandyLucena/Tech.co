<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
    
    $_SESSION['contact_data'] = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'subject' => $_POST['subject'],
      'message' => $_POST['message'],
    ];

    header("Location: confirmation.php");
    exit();
  }
}
?>
