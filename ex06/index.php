<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de senhas</title>
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
  max-width: 500px;
  height: auto;
  padding: 20px 50px;
}

label {
  display: inline-block;
  padding-bottom: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 10px 0;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;

  &::placeholder {
    text-align: center;
  }
}

input[type="submit"] {
  width: 100%;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007BFF;
  color: #fff;
  cursor: pointer;

  &:hover {
    background-color: #0056b3;
  }
}

input[type="checkbox"] {
  margin-top: 10px;
}

.options {
  display: flex;
  flex-direction: column;
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
  <h1>Gerador de senhas</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="length">Qual o tamanho da senha?</label>
    <input type="text" name="length" placeholder="Tamanho da senha" required>
    <div class="options">
      <span>
        <label for="specialCharacters">Caracteres especiais?</label>
        <input type="checkbox" name="specialCharacters" id="specialCharacters">
      </span>
      <span>
        <label for="numbers">Números?</label>
        <input type="checkbox" name="numbers" id="numbers">
      </span>
    </div>
    <input type="submit" value="Gerar senha">
  </form>

  <?php
    $length = $_POST["length"];
    $specialCharacters = isset($_POST["specialCharacters"]);
    $numbers = isset($_POST["numbers"]);
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    if ($specialCharacters) {
      $characters .= "!@#$%&*()";
    }

    if ($numbers) {
      $characters .= "0123456789";
    }

    $password = "";

    for ($i = 0; $i < $length; $i++) {
      $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    echo "<p class='resultado'>Sua senha é: $password</p>";
  ?>

</body>

</html>