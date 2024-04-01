<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de moedas</title>
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
  <h1>Conversor de moedas</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="value" placeholder="Digite o valor em R$">
    <input type="submit" value="Converter">
  </form>

  <?php
    $convertValue = $_POST['value'];
    $dolar = 5.41;


    echo "<div class='resultado'>";
    echo "<p>R$ " . $convertValue . " reais equivalem a US$ " . number_format($convertValue / $dolar, 2, ',', '.') . " dólares</p>";
    echo "</div>";
  ?>

</body>

</html>