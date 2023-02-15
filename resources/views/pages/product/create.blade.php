@extends('layouts.main-layout')

@section('content')
    
    <h1>CREATE NEW PRODUCT</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="price">Price</label>
        <input type="number" name="price">
        <br>
        <label for="weight">Weight</label>
        <input type="number" name="weight">
        <br>
        <label for="typology">Typology</label>
        <select name="typology_id">
            @foreach ($typologies as $typology)
                <option value="{{ $typology -> id }}">{{ $typology -> name }}</option>
            @endforeach
        </select>
        <br>
        <h3>Categories</h3>
        @foreach ($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category -> id}}">
            <label for="categories">{{ $category -> name }}</label>
            <br>
        @endforeach
        
        <input type="submit" value="CREATE NEW PRODUCT">
    </form>
@endsection