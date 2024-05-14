@extends('layouts.header')
@section('maincontent')
<div class="">
    <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4"> <h1>Create New Inventory</h1><div style="display: flex;align-items: center;justify-content: center;"><a href="{{ route('items.index') }}"  class="btn btn-info">Back</a></div></div>
    <form method="POST" action="{{ route('items.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price ( ₹ )</label>
            <input type="number" class="form-control" id="price" name="price" required min="0">
        </div>
        <div class="form-group">
            <label for="quantity_in_stock">Quantity in Stock</label>
            <input type="number" class="form-control" id="quantity_in_stock" name="quantity_in_stock" required min="0">
        </div>
        <button type="submit" class="btn btn-success">Create Item</button>
    </form>
</div>
@endsection
