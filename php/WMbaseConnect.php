<head>
<!-- template links ...fromCMS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/color-restyle.css">
</head>


<?php
//***ConnectionSettings webmaking.pro***//

include 'connConfig/connConfig.php';
//using PDO method
try {
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p class='fs-3 text-center text-secondary bg--main--DarkColor--restyle'> Connected successfully</p>" . PHP_EOL;
  } catch(PDOException $e) {
    echo "<p class='fs-3 text-center text-secondary bg--main--DarkColor--restyle'> Connection failed: </p>" . $e->getMessage();
  }
echo "<div class='border-bottom'></div>";
phpinfo();
?>