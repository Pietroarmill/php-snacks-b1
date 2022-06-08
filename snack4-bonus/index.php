<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>ciao</h1>
  <?php
  $rdn_number_array = [];

  while (count($rdn_number_array) !== 15) {
    $number = rdn_number();
    if (!in_array($number, $rdn_number_array)) {
      $rdn_number_array[] = $number;
    }

  }
  var_dump($rdn_number_array) ;
  ?>
  
  <?php
  function rdn_number() {
    $random_int = rand(1, 100);
    return $random_int;
  }
  ?>

</body>
</html>