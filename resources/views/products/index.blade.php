@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product List</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>${{ number_format($p->price, 2) }}</td>
                <td>
                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('products.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <form action="{{ route('products.destroy', $p->id) }}" 
                          method="POST"
                          style="display:inline-block"
                          onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE') 
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection