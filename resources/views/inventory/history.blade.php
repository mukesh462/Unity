@extends('layouts.header')
@section('maincontent')
    <div class="">
        <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4">
            <h1>Inventory History List</h1>
            <div style="display: flex;align-items: center;justify-content: center;"><a href="{{ route('items.index') }}"
                    class="btn btn-info">Back</a></div>
        </div>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>User Type</th>
                    <th>Inventory Product Name</th>
                    <th>Ref Type</th>
                    <th>Notes</th>
                    <th>Date </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->user_type == 1 ? 'Super Admin' : 'Sub Admin' }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->ref_type }}</td>
                        <td>{{ $item->note }}</td>
                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
