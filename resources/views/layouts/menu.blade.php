@extends('layouts.header')
@section('maincontent')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="p-3 text-right">
                            <a class="btn btn-primary" href="/superAdmin/Menu/create"><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;New</a>
                        </div>

                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Parent</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Menu Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $menu)
                                    <tr>
                                        <th scope="row">{{ $menu->id }}</th>
                                        @if ($menu->parent_id == 0)
                                            <td>Root</td>
                                        @else
                                            @php
                                                $m_data = \App\Models\AdminMenu::where('id', $menu->parent_id)->first();
                                            @endphp
                                            <td>{{ $m_data->name }}</td>
                                        @endif
                                        <td>{{ $menu->name }}</td>
                                        <td>
                                            @if ($menu->menu_type == 1)
                                                <span class='badge bg-info'> SuperAdmin</span>
                                            @else
                                                <span class='badge bg-success'>Sub Admin</span>
                                            @endif

                                        </td>


                                        <td>
                                            <a href="{{ route('s.menu_edit', $menu->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('s.menu_delete', $menu->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                                <tr>
                                    <td>sdsd</td>
                                    <td>sdsd</td>
                                    <td>sdsd</td>
                                    <td>sdsd</td>
                                    <td>sdsd</td>

                                </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
