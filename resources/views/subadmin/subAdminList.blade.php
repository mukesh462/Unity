@extends('layouts.header')
@section('maincontent')
    <div class="">
        <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4">
            <h1>Sub Admin List</h1>
            <div style="display: flex;align-items: center;justify-content: center;">
                <div class="form-group">
                    @if (user_access('users/create'))
                        <a href="{{ route('subAdmin.create') }}" class="btn btn-success"><i class="fa fa-plus "></i> New</a>
                    @endif
                </div>
            </div>
        </div>
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
                    @if (user_access('users/edit') || user_access('users/delete'))
                        <th scope="col">Action</th>
                    @endif

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
                        <td>
                            @if (user_access('users/edit'))
                                <a href="{{ route('subAdmin.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            @endif
                            @if (user_access('users/delete'))
                                <form action="{{ route('subAdmin.delete', $user->id) }}" method="GET"
                                    style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @endif

                        </td>
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
