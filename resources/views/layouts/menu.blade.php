@extends('layouts.header')
@section('maincontent')
    <section class="mt-3">
        <div class="d-flex justify-content-between">
            <h1>Admin Menu</h1>
            <div class="p-3 pull-right">
                <a class="btn btn-primary" href="{{ route('menu.form') }}"><i class="fa fa-save"></i>&nbsp;&nbsp;New</a>
            </div>
        </div>




        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Menu Name</th>
                    {{-- <th scope="col">Url</th> --}}

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allMenu as $menu)
                    <tr>
                        <th scope="row">{{ $menu->id }}</th>

                        <td>{{ $menu->menu_name }}</td>
                        {{-- <td>{{ $menu->url }}</td> --}}

                        <td>
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('menu.delete', $menu->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!-- End Default Table Example -->

    </section>
@endsection
