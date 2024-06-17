<?php
try {
  $sql = "SELECT * FROM products";
  $stmt = $db->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();

} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}


if (isset($_POST['delete-product'])) {
  $product_ids = [];

  foreach ($_POST as $product) {
    $product_ids[] = $product;
  }

  if (!empty($product_ids)) {
    try {
      $placeholders = implode(',', array_fill(0, count($product_ids), '?'));
      $sql = "DELETE FROM `products` WHERE `ID` IN ($placeholders)";
      $stmt = $db->prepare($sql);

      foreach ($product_ids as $key => $id) {
        $stmt->bindValue(($key + 1), $id, PDO::PARAM_INT);
      }

      $stmt->execute();

      header("Location: index.php");
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  } else {
    echo "No products selected.";
  }
}
?>
