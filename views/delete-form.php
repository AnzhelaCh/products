<form method="post" action="" enctype="multipart/form-data">
  <span class="close-btn">X</span>

  <h2>
    Select the items you want to delete
  </h2>

  <ul>
    <?php foreach ($data as $product): ?>
      <?php $images = json_decode($product['Image'], true); ?>

      <li class="product-list__item">
        <label for="<?php echo "{$product['ID']}" ?>">
          <input type="checkbox" id="<?php echo "{$product['ID']}" ?>" name="<?php echo "{$product['ID']}" ?>" value="<?php echo "{$product['ID']}" ?>">

          <img src="<?php echo "{$images[0]}" ?>" alt="<?php echo "{$product['Title']}" ?>">

          <span class="product-list__item-title">
            <?php echo "{$product['Title']}" ?>
          </span>
        </label>
      </li>
    <?php endforeach;?>
  </ul>

  <button type="submit" name="delete-product">Delete</button>
</form>
