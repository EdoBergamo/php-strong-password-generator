<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Genera Password</h1>

  <form method="GET">
    <label for="length">Lunghezza Password</label>
    <input type="number" id="length" name="length" min="8" max="32" />
    <button type="submit">Genera Password</button>
  </form>

  <?php
    function generatePassword($length) {
      $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@';
      return substr(str_shuffle($char), 0, $length);
    }

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
      $length = $_GET['length'];

      $password = generatePassword($length);

      echo "<p>Password: {$password}</p>";
    }
  ?>
</body>
</html>