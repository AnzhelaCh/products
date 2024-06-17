<?php
if (isset($_POST['add-product'])) {
  $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
  $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

  $file_paths = [];

  $upload_dir = 'uploads/';

  foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
    $file_name = basename($_FILES['image']['name'][$key]);
    $file_path = $upload_dir . $file_name;

    if (move_uploaded_file($tmp_name, $file_path)) {
      $file_paths[] = $file_path;
    } else {
      echo "Error uploading file: " . htmlspecialchars($file_name);
      exit;
    }
  }

  $file_paths_json = json_encode($file_paths);

  try {
    $sql = "INSERT INTO `products` (`ID`, `Image`, `Description`, `Price`, `Title`) VALUES (NULL, :image, :description, :price, :title)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':image', $file_paths_json);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':title', $title);

    $stmt->execute();

    echo "<span class='success-message'>Product added successfully.</span>";
  } catch (PDOException $e) {
    header("Location: index.php");
  }
}
?>
