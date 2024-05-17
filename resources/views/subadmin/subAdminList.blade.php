@extends('layouts.header')
@section('maincontent')
<div class="">
    <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4"> <h1 >Sub Admin List</h1><div style="display: flex;align-items: center;justify-content: center;">
        {{-- <a href="{{ route('items.create') }}"  class="btn btn-success">Add New Inventory</a> --}}
        <div class="form-group">
            <input type="text" id="searchInput" class="form-control" placeholder="Enter username or name">
        </div>
    </div></div>
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>User Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Pincode</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->pincode }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#myTable tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection

