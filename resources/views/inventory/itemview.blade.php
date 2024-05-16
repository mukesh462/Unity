@extends('layouts.header')
@section('maincontent')
    <div class="">
        <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4">
            <h1>Inventory List</h1>
            @if (user_access('items/create'))
                <div style="display: flex;align-items: center;justify-content: center;">
                    <a href="{{ route('items.create') }}" class="btn btn-success">Add New Inventory</a>
                </div>
            @endif

        </div>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Inventory Name</th>
                    <th>Description</th>
                    <th>Price ( ₹ )</th>
                    <th>Quantity</th>
                    <th>Date </th>
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
                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                        <td>
                            @if (user_access('items/edit'))
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            @endif
                            @if (user_access('items/delete'))
                                <form action="{{ route('items.destroy', $item->id) }}" method="GET"
                                    style="display: inline;">
                                    @csrf

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                            @if (user_access('items/history'))
                                <a href="{{ route('items.history', $item->id) }}" class="btn btn-info">View History</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
