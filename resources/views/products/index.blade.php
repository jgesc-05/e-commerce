<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Products</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0f1111;
      color: #fff;
      margin: 0;
      padding: 20px;
    }

    h2 {
      margin-bottom: 15px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 20px;
    }

    .product-card {
      background: #131921;
      border-radius: 8px;
      padding: 15px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.2s ease-in-out;
    }

    .product-card:hover {
      transform: scale(1.02);
    }

    .product-card img {
      width: 100%;
      border-radius: 6px;
      margin-bottom: 10px;
      background: #fff;
      object-fit: contain;
    }

    .product-title {
      font-size: 15px;
      font-weight: bold;
      margin-bottom: 6px;
      color: #ddd;
    }

    .rating {
      font-size: 14px;
      color: #f0c14b;
      margin-bottom: 6px;
    }

    .price {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #ff9900;
    }

    .delivery {
      font-size: 13px;
      margin-bottom: 10px;
      color: #bbb;
    }

    .btn {
      background: #ffd814;
      border: none;
      color: #000;
      padding: 10px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.2s ease-in-out;
    }

    .btn:hover {
      background: #f7ca00;
    }
  </style>
</head>
<body>
  <h2>Results</h2>
  <p>Check each product page for more buying options. Price and details may vary depending on size and color.</p>

  <div class="product-grid">
    
    <div class="product-card">
      <img src="https://dlcdnwebimgs.asus.com/files/media/8B74E7EE-B66A-4420-894E-3C3B980312EE/v1/img/display/strix-g-2022.png" alt="ASUS ROG Strix G16">
      <div class="product-title">ASUS ROG Strix G16 Gaming Laptop (2025), FHD+ 16:10, 165Hz, NVIDIA® GeForce RTX™ 4060</div>
      <div class="rating">★★★★☆ (1,000+ bought last month)</div>
      <div class="price">$1,399.99</div>
      <div class="delivery">Arrives by Mon, Sept 22</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="product-card">
      <img src="https://dlcdnwebimgs.asus.com/files/media/8B74E7EE-B66A-4420-894E-3C3B980312EE/v1/img/display/strix-g-2022.png" alt="CyberPowerPC Xtreme VR">
      <div class="product-title">CyberPowerPC Gamer Xtreme VR, Intel Core i7-14700F, RTX 4060 Ti, 16GB DDR5, 1TB SSD</div>
      <div class="rating">★★★★★ (500+ bought last month)</div>
      <div class="price">$1,359.99</div>
      <div class="delivery">Arrives by Sat, Sept 20</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="product-card">
      <img src="https://dlcdnwebimgs.asus.com/files/media/8B74E7EE-B66A-4420-894E-3C3B980312EE/v1/img/display/strix-g-2022.png" alt="MSI Codex Z2">
      <div class="product-title">MSI Codex Z2 Gaming Desktop, AMD R7-8700F, RTX 4070, 32GB DDR5, 2TB NVMe SSD</div>
      <div class="rating">★★★★☆ (300+ bought last month)</div>
      <div class="price">$1,699.99</div>
      <div class="delivery">Arrives between Sept 29 - Oct 13</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="product-card">
      <img src="https://dlcdnwebimgs.asus.com/files/media/8B74E7EE-B66A-4420-894E-3C3B980312EE/v1/img/display/strix-g-2022.png" alt="MSI Katana 15 HX">
      <div class="product-title">MSI Katana 15 HX Gaming Laptop, Intel i9-14900HX, RTX 5070, 32GB DDR5, 1TB SSD</div>
      <div class="rating">★★★★☆ (500+ bought last month)</div>
      <div class="price">$1,657.10</div>
      <div class="delivery">Free delivery between Sept 26 - 29</div>
      <button class="btn">Add to Cart</button>
    </div>

    <div class="product-card">
      <img src="https://dlcdnwebimgs.asus.com/files/media/8B74E7EE-B66A-4420-894E-3C3B980312EE/v1/img/display/strix-g-2022.png" alt="Gaming Desk">
      <div class="product-title">Gaming Desk 40" with Power Outlets & LED Lights, L-Shaped Design</div>
      <div class="rating">★★★☆☆ (900+ bought last month)</div>
      <div class="price">$69.98</div>
      <div class="delivery">Arrives by Tue, Sept 23</div>
      <button class="btn">Add to Cart</button>
    </div>

  </div>
</body>
</html>
