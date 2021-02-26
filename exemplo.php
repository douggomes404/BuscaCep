<?php
  
require_once "vendor/autoload.php";

use \Doug\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('88085201');

print_r($resultado);
?>