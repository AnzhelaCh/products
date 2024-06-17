<?php
include_once "core/db_script.php";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <header>
    <nav>
      <details <?php if(isset($_POST['add-product'])) echo 'open' ?> >
        <summary>Create</summary>
        <div class="product-create__wrapper">
          <?php require('controllers/create-product.php'); ?>
        </div>
      </details>

      <details>
        <summary>Delete</summary>
        <div class="product-delete__wrapper">
          <?php require('controllers/delete-product.php'); ?>
        </div>
      </details>
    </nav>
  </header>

  <main>
    <?php require('controllers/product-list.php'); ?>
  </main>
  <script src="js/global.js"></script>
</body>
</html>
