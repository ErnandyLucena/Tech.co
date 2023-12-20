<?php
session_start();

if (isset($_SESSION['contact_data'])) {
  $contactData = $_SESSION['contact_data'];
} else {
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmação</title>
</head>
<body>
  <h1>Confirmação de Contato</h1>
  <p>Os dados foram recebidos com sucesso. Abaixo estão os detalhes fornecidos:</p>
  
  <ul>
    <li><strong>Nome:</strong> <?php echo $contactData['name']; ?></li>
    <li><strong>Email:</strong> <?php echo $contactData['email']; ?></li>
    <li><strong>Assunto:</strong> <?php echo $contactData['subject']; ?></li>
    <li><strong>Mensagem:</strong> <?php echo $contactData['message']; ?></li>
  </ul>

  <a href="index.html">Voltar para o forms</a>
</body>
</html>
