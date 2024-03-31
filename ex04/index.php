<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificador de maioridade</title>
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

input[type="text"] {
  width: 100%;
  padding: 10px 0;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  text-align: center;

  &::placeholder {}
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
  <h1>Verificador de maioridade</h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="age" placeholder="Digite sua idade">
    <input type="submit" value="Verificar">
  </form>

  <?php
    $age = $_POST["age"];

    if ($age >= 18) {
      echo "<p class='resultado'>Você é maior de idade.</p>";
    } else {
      echo "<p class='resultado'>Você é menor de idade.</p>";
    }
  ?>
</body>

</html>