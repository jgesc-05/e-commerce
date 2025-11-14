@extends('admin.layouts.app')

@section('content')
<h3>Add a new brand</h3>
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.brands.store') }}" method="post">
            @csrf
            <div class="input-group input-group-outline mb-4">
                <input type="text" name="name" class="form-control" placeholder="Brand name">
                <input type="submit" class="btn bg-gradient-success" value="Save">
            </div>
        </form>
    </div>
</div>



@endsection