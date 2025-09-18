<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
  <style>
    body {
      font-family: "Amazon Ember", Arial, sans-serif;
      background: #f0f2f2;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px 0;
      margin: 0;
    }

    .form-container {
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 480px;
      border: 1px solid #ddd;
    }

    .form-container h1 {
      text-align: left;
      margin-bottom: 20px;
      color: #111;
      font-size: 24px;
      font-weight: 500;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #111;
      font-size: 14px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #a6a6a6;
      border-radius: 3px;
      font-size: 14px;
      outline: none;
      box-sizing: border-box;
    }

    input:focus, textarea:focus {
      border-color: #e77600;
      box-shadow: 0 0 3px 1px rgba(228,121,17,0.5);
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    .submit-btn {
      width: 100%;
      background: #ffd814;
      border: 1px solid #fcd200;
      color: #111;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      font-weight: 600;
      transition: background 0.2s ease;
    }

    .submit-btn:hover {
      background: #f7ca00;
    }

    .submit-btn:active {
      background: #f0b800;
    }

    .form-footer {
      margin-top: 15px;
      font-size: 12px;
      color: #555;
      text-align: center;
    }

    .form-footer a {
      color: #0066c0;
      text-decoration: none;
    }

    .form-footer a:hover {
      text-decoration: underline;
      color: #c45500;
    }
  </style>
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
