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
        <form action="{{ route('subAdmin.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- <div class=" col-md-6">
                    <label for="">Select Menu</label>
                    <select name="parent_id" id="" class="form-select">
                        <option value="0" @if (is_object($data) && $data->parent_id == 0) selected @endif>
                            Root</option>
                        @foreach ($m_data as $menu)
                            <option value="{{ $menu->id }}" >
                            <!-- <option value="{{ $menu->id }}" @if ($data->parent_id == $menu->id) selected @endif> -->
                                {{ $menu->name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class=" col-md-6">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ is_object($data) ? $data->first_name : old('first_name') }}">
                </div>
                <div class=" col-md-6">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ is_object($data) ? $data->last_name : old('last_name') }}">
                </div>
                <div class=" col-md-6">
                    <label for="dob">DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob"
                        value="{{ is_object($data) ? $data->dob : old('dob') }}">
                </div>
                <div class=" col-md-6">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile"
                        value="{{ is_object($data) ? $data->mobile : old('mobile') }}">
                </div>
                <div class=" col-md-6">
                    <label for="address">address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ is_object($data) ? $data->address : old('address') }}">
                </div>
                <div class=" col-md-6">
                    <label for="state">state</label>
                    <input type="text" class="form-control" id="state" name="state"
                        value="{{ is_object($data) ? $data->state : old('state') }}">
                </div>
                <div class=" col-md-6">
                    <label for="city">city</label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ is_object($data) ? $data->city : old('city') }}">
                </div>
                <div class=" col-md-6">
                    <label for="pincode">pincode</label>
                    <input type="text" class="form-control" id="pincode" name="pincode"
                        value="{{ is_object($data) ? $data->pincode : old('pincode') }}">
                </div>
                <div class=" col-md-6">
                    <label for="user_name">user_name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name"
                        value="{{ is_object($data) ? $data->user_name : old('user_name') }}">
                </div>
                <div class=" col-md-6">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id="password" name="password"
                        value="{{ is_object($data) ? $data->password : old('password') }}">
                </div>
                <div class=" col-md-6">
                    <label for="">Select Menu</label>
                    <select name="parent_id" id="" class="form-select">
                        <!-- <option value="0" @if (is_object($data) && $data->parent_id == 0) selected @endif>
                            Root</option> -->
                        @foreach ($m_data as $menu)
                            <option value="{{ $menu->id }}" >
                                {{ $menu->name }}</option>
                        @endforeach
                    </select>
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
