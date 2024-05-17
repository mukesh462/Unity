@extends('layouts.header')
@section('maincontent')
    <style>
        .form-select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f9fa;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-select:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
        }

        .form-select option {
            padding: 8px;
            background-color: #fff;
        }

        .form-select option:hover {
            background-color: #e9ecef;
        }

        /* Custom style for selected options */
        .form-select option:checked {
            background-color: #007bff;
            color: #fff;
        }

        /* Add styles for multiple select's scrollbar for better UX */
        .form-select::-webkit-scrollbar {
            width: 8px;
        }

        .form-select::-webkit-scrollbar-track {
            background: #f8f9fa;
        }

        .form-select::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }

        .form-select::-webkit-scrollbar-thumb:hover {
            background: #b3b3b3;
        }
    </style>
    <div class="  mt-1 p-5">
        <h1>Sub Admin Form</h1>
        <button class="btn btn-primary my-3"><a href="{{ route('subAdmin.list') }}" class="text-decoration-none text-white">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a> </button>

        @include('error')
        @php
            $m_data = \App\Models\AdminMenu::select('id', 'menu_name as name')->get();
        @endphp
        <form action="{{ route('subAdmin.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

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
                    <label for="username">User name</label>
                    <input type="email" class="form-control" id="username" name="username" required
                        value="{{ is_object($data) ? $data->username : old('username') }}">
                </div>
                <div class=" col-md-6">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id="password" name="password"
                        value="{{ is_object($data) ? $data->password : old('password') }}">
                </div>

                <div class="col-md-6 mt-3">
                    <label for="menu_select">Select Menu</label>
                    <select name="access_menu[]" id="menu_select" class="form-select" multiple>
                        <!-- <option value="0" @if (is_object($data) && $data->parent_id == 0) selected @endif>
                                                                        Root</option> -->
                        @foreach ($m_data as $menu)
                            <option value="{{ $menu->id }}" @if (is_object($data) && in_array($menu->id, json_decode($data->access_menu))) selected @endif>
                                <!-- {{ $menu->name }} -->

                                {{ $menu->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
            @if (is_object($data))
                <input type="hidden" name="user_id" value="{{ $data->id }}">
            @endif

            <button type="submit"
                class="btn {{ is_object($data) ? 'btn-warning' : 'btn-primary' }}  mt-2 ">{{ is_object($data) ? 'Update' : 'Submit' }}</button>
        </form>
    </div>
    </div>
@endsection
