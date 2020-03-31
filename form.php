<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>ALBERT LOPES</title>
  	<link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include 'header.inc'; ?>
    <div class="container">
      <div class="form">
        <h2>Contact form</h2>
          <div class="formulaire">
            <form action="mail.php" method="POST">
              <p>Name</p> <input type="text" name="name">
              <p>Email</p> <input type="text" name="email">
              <p>Phone</p> <input type="text" name="phone">
              <p>Message</p><textarea name="message" rows="6" cols="25"></textarea>
            <p class="bouton"><input type="submit" value="Send" class="sub"><input type="reset" value="Clear"></p>
          </form>
        </div>
      </div>
    </div>

    	<?php include 'footer.inc'; ?>
  </body>
</html>
