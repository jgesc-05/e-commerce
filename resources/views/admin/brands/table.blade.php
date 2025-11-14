@extends('admin.layouts.app')

@section('content')
<div class="card">
    <h3>Brands List</h3>
<div class="card-body">
<a href="{{ route('admin.brands.create') }}" class="btn btn-success">Add New Brand</a>
<table class="table align-items-center mb-0">
    <thead>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>

        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
    </thead>
    <tbody>
        @foreach($brands as $b)
        <tr>
            <td class="align-middle text-center">{{ $b->id }}</td>
            <td class="align-middle text-center">{{ $b->name }}</td>

            <td class="align-middle text-center">{{ $b->created_at }}</td>
            <td class="align-middle text-center">{{ $b->updated_at }}</td>
            <td>
                
        <form action="{{ route('admin.brands.delete', $b->id) }}" method="POST"
        onsubmit="return confirm('¿Estás seguro de eliminar esta marca?');">
                @csrf
                @method('DELETE')
                <button type="submit" style="color: red; background:none; border:none;">
                    Eliminar
                </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $brands->links() }}
</div>
</div>
@endsection