<?php
  $sum = 4 + 5;
  $product = 4 * 2;
  $difference = 12 - 5;
  $quotient = 12 / 2;
 ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Encrypt a Message</title>
</head>
<body>
    <div class="container">
      <h1>Type in the secret message you would like to encode!</h1>
      <form action="encrypt.php">
        <div class="form-group">
          <label for="message">Message to encrypt</label>
          <input id="message" name="message" class="form-control" type="text">
        </div>
        <button type="submit" class="btn-success">Send</button>
      </form>
    </div>
</body>
</html>
