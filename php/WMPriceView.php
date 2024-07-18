<head>
<!-- template links ...fromCMS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/color-restyle.css">
</head>
<?php
include 'connConfig/connConfig.php';
// Create connection
$connection = new mysqli($servername, $username, $password, $databasename);

//printf("Начальный набор символов: %s\n", $connection->character_set_name());
$connection->set_charset('utf8mb4');

$SelectQueryT1AllFields = "SELECT id, productName, productPrice, productDescription FROM WebMakingProTemplateProducts";

$result = $connection->query($SelectQueryT1AllFields);
echo "<div class='fs-3 text-center text-secondary bg--main--DarkColor--restyle'>Прайс лист | webmaking.rpo</div>
            <table style='width: 80%; margin: 0 auto 0;'><style>th{text-align: left; width: 20em;} td{text-align: left; width: 20em;}</style>
            <tr>
            <th>№</th>
            <th>НАЗВАНИЕ ПРОДУКТА</th>
            <th>ОПИСАНИЕ</th>
            <th>ЦЕНА</th>
	          </tr>
            </table>" . PHP_EOL;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "id: " . $row["id"]. " - Name of product: " . $row["productName"]. "  - Price: " . $row["productPrice"]. " - Description: " . $row["productDescription"]. "<br>" . PHP_EOL;
      echo "<!--<div class='fs-4'>
              *** id: " . $row["id"]. " - Name of product: " . $row["productName"]. "  - Price: " . $row["productPrice"]. " - Description: " . $row["productDescription"]. "<br>
            </div>--> <!--построчный вывод -->
            <!--табличный вывод -->
            <table style='width: 80%; margin: 0 auto 0;'><style>th{text-align: left; width: 20em;} td{text-align: left; width: 20em;}</style>
            <tr>
              <td>".$row["id"]."</td>
              <td>".$row["productName"]."</td>
              <td>".$row["productDescription"]."</td>
              <td>".$row["productPrice"]."</td>
              <br>		
              
            </tr>
            </table>";
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($connection);
?>

  

