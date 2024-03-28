<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex02 - Cadastro de usuário</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  padding: 20px;
  background-color: #f0f0f0;
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  width: 100%;
  max-width: 500px;
  height: auto;
  padding: 20px 50px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007BFF;
  color: #fff;
  cursor: pointer;
}

.resultado {
  max-width: 500px;
  margin: 20px auto;
  padding: 20px;
  border-radius: 5px;
  background-color: #fff;
  color: #007BFF;
  font-size: 18px;
  text-align: center;
}
</style>

<body>
  <h1>Cadastro de usuários</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email"><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit">
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SERVER['PHP_SELF']){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      echo "<div class='resultado'>";
      echo "<p>Cadastro realizado com sucesso pro usuário $name</p>";
      echo "</div>";
    }

  ?>
</body>

</html>