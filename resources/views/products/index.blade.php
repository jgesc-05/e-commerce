<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Products</title>
  <link rel="stylesheet" href="{{asset('css/styleIndex.css')}}">
</head>
<body>

<header class="site-header">
  <div class="site-header__inner">


    <div class="auth">
      @guest
        <a href="{{ route('login') }}" class="btn btn--ghost">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="btn">Registrarse</a>
        <a href="{{ route('admin.index') }}" class="btn btn--ghost">Admin</a>
      @else
        <span class="user">{{ Auth::user()->name }}</span>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn--ghost">Cerrar sesión</button>
        </form>
      @endguest
      <a href="#" class="btn btn--cart">🛒</a>
    </div>

  </div>
</header>

<h2>Our Products</h2>
<p>Select a Category.</p>

<!-- BOTONES DE CATEGORÍAS -->
<div style="display:flex; gap:10px; padding:20px; flex-wrap:wrap;">

    <!-- Botón de TODOS -->
    <a href="{{ route('products.index', ['category' => 'all']) }}"
       class="btn {{ $activeCategory === 'all' || $activeCategory === null ? 'btn--active' : '' }}">
        Todos
    </a>

    @foreach ($categories as $cat)
        <a href="{{ route('products.index', ['category' => $cat->id]) }}"
           class="btn {{ $activeCategory == $cat->id ? 'btn--active' : '' }}">
            {{ $cat->name }}
        </a>
    @endforeach

</div>

<div class="product-grid">

  @forelse ($products as $product)
    <div class="product-card">
      <img src="https://dlcdnwebimgs.asus.com/files/media/8B74E7EE-B66A-4420-894E-3C3B980312EE/v1/img/display/strix-g-2022.png"
           alt="{{ $product->name }}">

      <div class="product-title">{{ $product->name }}</div>
      <div class="rating">★★★★☆ (100+ bought last month)</div>
      <div class="price">${{ number_format($product->price, 2) }}</div>
      <div class="delivery">Delivery available</div>
      <button class="btn">Add to Cart</button>
    </div>
  @empty
    <p style="padding:20px;">No hay productos en esta categoría.</p>
  @endforelse

</div>
</body>
</html>
