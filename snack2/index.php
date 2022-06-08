<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Inserisca i suoi dati</h3>
  <?php 
  $user_name = $_GET["name"];
  $user_mail = $_GET["mail"];
  $user_age = $_GET["age"];

  echo "Name: " .ucfirst($user_name) ."<br>" ."Mail: " .$user_mail ."<br>" ."Età: ".$user_age; 
  ?>

  <?php 
    if (strlen($user_name) <= 3 || strpos($user_mail, "@") === false || strpos($user_mail, ".") === false || !is_numeric($user_age) ) {
      echo "<h1>Accesso Negato</h1>";
    } else {
      echo "<h1>Accesso Riuscito</h1>";
    }
  ?>


</body>
</html>