<?php
require('models/view-product-list.php');

if(empty($results)){
  echo "Please, create product!";
  exit();
}

$data = $results;

require('views/products.php');

