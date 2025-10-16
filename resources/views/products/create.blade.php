<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <div class="form-container">
    <h1>Create a New Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
      
      <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" placeholder="Enter product name" required>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" placeholder="Enter product description"></textarea>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" placeholder="Enter price" required>
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" accept="image/*">
      </div>

      <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" name="brand" placeholder="Enter brand">
      </div>

      <button type="submit" class="submit-btn">Create Product</button>
    </form>

  </div>
</body>
</html>
