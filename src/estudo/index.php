<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Projeto php</h1>

  <form action="teste.php" method="post">
    <input type="text" name="nome" id="nome" placeholder="nome">
    <input type="email" name="email" id="email" placeholder="email">
    <button type="submit">enviar</button>
  </form>
  <br>
  <?php include "helprs.php"; ?>

</body>

</html>