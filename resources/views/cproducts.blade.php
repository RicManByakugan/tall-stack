@extends('layouts.app')

@section('content')
    <h1>Produits</h1>

    <form action="{{ route('cproducts.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nom" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Prix" required>
        <button type="submit">Ajouter</button>
    </form>

    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - {{ $product->price }} Ar</li>
        @endforeach
    </ul>
@endsection
