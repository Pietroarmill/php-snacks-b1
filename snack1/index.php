<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. -->
  <?php

  $match = [
    [
      "casa" => "Virtus Bologna",
      "ospite" => "Olimpia Milano",
      "punti casa" => "27",
      "punti ospite" => "31"
    ],
    [
      "casa" => "Brescia",
      "ospite" => "Cremona",
      "punti casa" => "18",
      "punti ospite" => "36"
    ],
    [
      "casa" => "Derthona",
      "ospite" => "Venezia",
      "punti casa" => "15",
      "punti ospite" => "12"
    ],
    [
      "casa" => "Dinamo Sassari",
      "ospite" => "Reggiana",
      "punti casa" => "40",
      "punti ospite" => "29"
    ],
  ];
  ?>

  <h1>Calendario partite Basket</h1>

  <?php
    for ($i=0; $i < count($match); $i++) { 
  ?>
  <div>
    <?php
    echo $match[$i]["casa"] ." - " .$match[$i]["ospite"] ." | " .$match[$i]["punti casa"] ."-" .$match[$i]["punti ospite"];
    ?>
  </div>
  <?php
    }
  ?>
  
</body>
</html>

