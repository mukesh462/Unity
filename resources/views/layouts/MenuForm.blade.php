@extends('layouts.header')
@section('maincontent')
    <h1>Admin Menu Form</h1>
    <div class="   p-5">
        <button class="btn btn-primary text-end my-3"><a href="{{ route('menu') }}" class="text-decoration-none text-white">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a> </button>

        @include('error')
        @php
            $m_data = \App\Models\AdminMenu::select('id', 'menu_name as name')->get();
        @endphp
        <form action="{{ route('menu.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class=" col-md-6">
                    <label for="menu_name">Menu name</label>
                    <input type="text" class="form-control" id="menu_name" name="menu_name"
                        value="{{ is_object($data) ? $data->menu_name : old('menu_name') }}">
                </div>
                <div class=" col-md-6">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url"
                        value="{{ is_object($data) ? $data->url : old('url') }}">
                </div>
                <div class=" col-md-12">
                    <label for="menu_type" class="my-2">Menu Type</label>
                    <select type="text" class="form-control" id="menu_type" name="menu_type"
                        value="{{ is_object($data) ? $data->menu_type : old('menu_type') }}">
                        <option value="1" @selected(isset($data->menu_type) && $data->menu_type == 1)>Main</option>
                        <option value="2" @selected(isset($data->menu_type) && $data->menu_type == 2)>Sub Main</option>

                    </select>
                </div>
            </div>
            @if (is_object($data))
                <input type="hidden" name="menu_id" value="{{ $data->id }}">
            @endif

            <button type="submit"
                class="btn mt-4 {{ is_object($data) ? 'btn-warning' : 'btn-primary' }}  mt-2 ">{{ is_object($data) ? 'Update' : 'Submit' }}</button>
        </form>
    </div>
    </div>
@endsection
