@extends('admin.layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="form-container">
    <h1>Create a New Product</h1>

    <div class="card">
      <div class="cardbody">
      <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group input-group-outline mb-3">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="productName"  value="{{ old('name') }}">
        </div>


        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="productDescription"  value="{{ old('description') }}"></textarea>
        </div>
        


        @error('price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter price"  value="{{ old('price') }}">
        </div>


        @error('category')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" id="productCategory">
            <option value="">-- Category --</option>
            @foreach($categories as $c)
              <<option value="{{$c->id}}">{{ $c->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" accept="image/*">
        </div>

        @error('brand')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="form-group">
        <label for="brand">Brand</label>
        <select name="brand" id="brand" id="productBrand">
            <option value="">-- Brand --</option>
            @foreach($brands as $b)
              <option value="{{$b->id}}">{{ $b->name }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="submit-btn">Create Product</button>
    </form>
      </div>
    </div>
</div>
@endsection
