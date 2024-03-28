<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex01</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  padding: 20px;
  background-color: #f0f0f0;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  max-width: 500px;
  margin: 0 auto;
}

input[type="text"] {
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
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Total da conta: <input type="text" name="total"><br>
    Porcentagem da gorjeta: <input type="text" name="percent"><br>
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = $_POST['total'];
    $percent = $_POST['percent'];

    $gorjeta = $total * ($percent / 100);

    echo "<div class='resultado'>A gorjeta é de R$ " . number_format($gorjeta, 2, ',', '.') . "</div>";
    echo "<div class='resultado'>O total da conta com a gorjeta é de R$ " . number_format($total + $gorjeta, 2, ',', '.') . "</div>";
    echo "<p class='resultado'>Agradecemos a preferência. Volte sempre!</p>";
  }
?>
</body>

</html>