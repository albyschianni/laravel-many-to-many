@extends('layouts.main-layout')

@section('content')

    <h1>Product</h1>

    <a href="{{ route('product.create') }}">CREATE NEW PRODUCT</a>
    @foreach ($categories as $category)
        <h2>{{ $category -> name }}</h2>

        <ul>
            @foreach ($category -> products as $product)
                <li>
                    [{{ $product -> code }}]{{ $product -> name }}
                    - {{ $product -> typology -> name }}
                    - DIGITAL: 
                    {{ $product -> typology -> digital ? "YES" : "NO" }}
                </li>
            @endforeach
        </ul>
        
    @endforeach
@endsection