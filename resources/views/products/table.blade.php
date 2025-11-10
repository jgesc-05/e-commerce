@extends('admin.layouts.app')

@section('content')
<div class="card">
    <h3>Products List</h3>
<div class="card-body">
<a href="{{ route('admin.products.create') }}" class="btn btn-success">Add New Product</a>
<table class="table align-items-center mb-0">
    <thead>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>

        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td class="align-middle text-center">{{ $p->id }}</td>
            <td class="align-middle text-center">{{ $p->name }}</td>
            <td class="align-middle text-center">{{ $p->price }}</td>
            <td class="align-middle text-center">{{ $p->brand_id }}</td>
            <td class="align-middle text-center">{{ $p->category_id }}</td>
            <td class="align-middle text-center">{{ $p->created_at }}</td>
            <td class="align-middle text-center">{{ $p->updated_at }}</td>
            <td>
                <a href="#" style="color: red;">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
</div>
</div>
@endsection