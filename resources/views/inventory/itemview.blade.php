@extends('layouts.header')
@section('maincontent')
<div class="">
    <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4"> <h1 >Inventory List</h1><div style="display: flex;align-items: center;justify-content: center;">
        <a href="{{ route('items.create') }}"  class="btn btn-success">Add New Inventory</a>
    </div></div>
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Inventory Name</th>
                <th>Description</th>
                <th>Price ( ₹ )</th>
                <th>Quantity</th>
                <th>Date & Timw</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity_in_stock }}</td>
                    <td>{{ $item->created_at->format('Y-m-d h:i:s A') }}</td>
                    <td>
                        @if($item->status == 1)
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @endif
                        <a href="{{ route('items.history', $item->id) }}" class="btn btn-info">View History</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

