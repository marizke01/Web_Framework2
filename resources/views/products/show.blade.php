@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Details</h2>

    <div class="card p-3">
        <h4>{{ $product->name }}</h4>
        <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Description:</strong><br>{{ $product->description }}</p>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection