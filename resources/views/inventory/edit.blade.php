@extends('layouts.header')
@section('maincontent')
    <div class="">
    <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4"> <h1>Inventory Edit</h1><div style="display: flex;align-items: center;justify-content: center;"><a href="{{ route('items.index') }}"  class="btn btn-info">Back</a></div></div>
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description">{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price ( ₹ ): </label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}">
            </div>
            <div class="form-group">
                <label for="quantity_in_stock">Quantity:</label>
                <input type="text" class="form-control" id="quantity_in_stock" name="quantity_in_stock" value="{{ $item->quantity_in_stock }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
