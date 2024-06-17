<form method="post" action="" enctype="multipart/form-data">
  <span class="close-btn">X</span>
  <p>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" required>
  </p>

  <p>
    <label for="image">Image</label>
    <input type="file" id="image" name="image[]" multiple required>
  </p>

  <p>
    <label for="description">Description</label>
    <input type="text" id="description" name="description" required>
  </p>

  <p>
    <label for="price">Price</label>
    <input type="number" id="price" name="price" required>
  </p>

  <button type="submit" name="add-product">Save</button>
</form>
