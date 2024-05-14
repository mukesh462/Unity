@extends('layouts.header')
@section('maincontent')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (user_access('list/create'))
                            <div class="p-3 text-right">
                                <a class="btn btn-primary" href="{{ route('list.form') }}"><i
                                        class="fa fa-save"></i>&nbsp;&nbsp;New</a>
                            </div>
                        @endif


                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Menu Name</th>
                                    {{-- <th scope="col">Url</th> --}}
                                    @if (user_access('list/edit') || user_access('list/delete'))
                                        <th scope="col">Action</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($allMenu as $menu)
                                    <tr>
                                        <th scope="row">{{ $menu->id }}</th>

                                        <td>{{ $menu->menu_name }}</td>
                                        {{-- <td>{{ $menu->url }}</td> --}}

                                        <td>
                                            @if (user_access('list/edit'))
                                                <a href="{{ route('list.edit', $menu->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            @endif
                                            @if (user_access('list/delete'))
                                                <a href="{{ route('list.delete', $menu->id) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
