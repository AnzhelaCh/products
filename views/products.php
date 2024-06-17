<div class="product-list__container">
  <ul>
    <?php foreach ($data as $product): ?>
      <?php $images = json_decode($product['Image'], true); ?>

      <li class="product-list__item">
        <img src="<?php echo "{$images[0]}" ?>" alt="<?php echo "{$product['Title']}" ?>">

        <span class="product-list__item-title">
          <strong>
            <?php echo "{$product['Title']}" ?>
          </strong>
        </span>

        <span>
           $ <?php echo "{$product['Price']}" ?>
        </span>

        <div class="product-list__details">
          <details>
            <summary>Read more</summary>

            <div class="product-list__details-wrap">
              <span class="close-btn">X</span>

              <div class="product-list__item-images">
                <?php foreach ($images as $image): ?>
                  <img src="<?php echo "{$image}" ?>" alt="<?php echo "{$product['Title']}" ?>">
                <?php endforeach;?>
              </div>

              <span class="product-list__item-title">
                <strong>
                  <?php echo "{$product['Title']}" ?>
                </strong>
              </span>

              <p>
                <?php echo "{$product['Description']}" ?>
              </p>

              <span>
               $ <?php echo "{$product['Price']}" ?>
              </span>
            </div>
          </details>
        </div>
      </li>
    <?php endforeach;?>
  </ul>
</div>

