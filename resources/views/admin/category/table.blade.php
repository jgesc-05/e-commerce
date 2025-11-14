@extends('admin.layouts.app')

@section('content')
<div class="card">
    <h3>Categories list</h3>
<div class="card-body">
<a href="{{ route('admin.category.create') }}" class="btn btn-success">Add New Category</a>
<table class="table align-items-center mb-0">
    <thead>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>

        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
    </thead>
    <tbody>
        @foreach($categories as $c)
        <tr>
            <td class="align-middle text-center">{{ $c->id }}</td>
            <td class="align-middle text-center">{{ $c->name }}</td>
        
            <td class="align-middle text-center">{{ $c->created_at }}</td>
            <td class="align-middle text-center">{{ $c->updated_at }}</td>
            <td>
                <a href="#" style="color: red;">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $categories->links() }}
</div>
</div>
@endsection