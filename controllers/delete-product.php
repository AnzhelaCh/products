<?php
require('models/delete_product.php');

if(empty($results)){
  echo "No products! Please, add product before.";
  exit();
}

$data = $results;
require('views/delete-form.php');
?>
