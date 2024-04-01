<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificador de Palíndromos</title>
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

details {
  width: 100%;
  max-width: 500px;
  margin-bottom: 20px;
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
  <h1>Verificador de Palíndromos</h1>

  <details>
    <summary>O que são palíndromos?</summary>
    <p>Palíndromos são palavras ou frases que se leem da mesma forma de trás para frente e de frente para trás.
    </p>
  </details>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="word" placeholder="Digite uma palavra">
    <input type="submit" value="Verificar">
  </form>

  <?php
    $typedWord = $_POST['word'];
    function isPalindrome($word) {
      $word = strtolower($word);
      $word = str_replace(' ', '', $word);
      $reversedWord = strrev($word);

      if ($word == $reversedWord) {
        return true;
      } else {
        return false;
      }
    }

    if (isPalindrome($typedWord)) {
      echo '<div class="resultado">A palavra <strong>' . $typedWord . '</strong> é um palíndromo.</div>';
    } else {
      echo '<div class="resultado">A palavra <strong>' . $typedWord . '</strong> não é um palíndromo.</div>';
    }

    ?>
</body>

</html>