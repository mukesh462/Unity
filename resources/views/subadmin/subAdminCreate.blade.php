@extends('layouts.header')
@section('maincontent')
    <div class="  mt-5 p-5">
        <h1>Sub Admin Create</h1>
        <button class="btn btn-primary my-3"><a href="{{ route('menu') }}" class="text-decoration-none text-white">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a> </button>

        @include('error')
        @php
            $m_data = \App\Models\AdminMenu::select('id', 'menu_name as name')->get();
        @endphp
        <form action="{{ route('menu.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- <div class=" col-md-6">
                    <label for="">Select Menu</label>
                    <select name="parent_id" id="" class="form-select">
                        <option value="0" @if (is_object($data) && $data->parent_id == 0) selected @endif>
                            Root</option>
                        @foreach ($m_data as $menu)
                            <option value="{{ $menu->id }}" @if ($data->parent_id == $menu->id) selected @endif>
                                {{ $menu->name }}</option>
                        @endforeach
                    </select>
                </div> --}}
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

            </div>
            @if (is_object($data))
                <input type="hidden" name="menu_id" value="{{ $data->id }}">
            @endif

            <button type="submit"
                class="btn {{ is_object($data) ? 'btn-warning' : 'btn-primary' }}  mt-2 ">{{ is_object($data) ? 'Update' : 'Submit' }}</button>
        </form>
    </div>
    </div>
@endsection
