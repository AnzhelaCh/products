<?php
try {
  $sql = "SELECT * FROM products";
  $stmt = $db->prepare($sql);
  $stmt->execute();

  $results = $stmt->fetchAll();

} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}



