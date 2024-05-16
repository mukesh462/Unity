@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div id="logo">
        <span class="big-logo">Admin Panel</span>
        <span class="small-logo">Admin</span>
    </div>
    <div id="left-menu">
        @php
            $getUser = auth()->user();

            if ($getUser->user_type == 1) {
                $menus = \App\Models\AdminMenu::where('menu_type', 1)->get();
            } else {
                $menus = \App\Models\AdminMenu::where('menu_type', 1)
                    ->whereIn('id', json_decode($getUser->access_menu))

                    ->get();
            }
        @endphp
        <ul>
            <li class="active"><a href="/">
                    <i class="ion-ios-person-outline"></i>
                    <span>Dashboard</span>
                </a></li>
            @foreach ($menus as $menu)
                <li>
                    <a href="{{ url($menu->url) }}">
                        <i class="ion-android-menu"></i>
                        <span>{{ $menu->menu_name }}</span>
                    </a>
                </li>
            @endforeach
            @if ($getUser->user_type == 1)
                <li class=""><a href="{{ route('menu') }}">
                        <i class="ion-android-menu"></i>
                        <span>Admin Menu</span>
                    </a></li>
            @endif

            {{-- <li class="has-sub">


                <ul>
                    <li><a href="#">UI Elements Item 1</a></li>
                    <li><a href="#">UI Elements Item 2</a></li>
                    <li><a href="#">UI Elements Item 3</a></li>
                </ul>
            </li> --}}


        </ul>
    </div>
    <div id="main-content">
        <div id="header" class="w-100 ">
            <div class="header-left  d-flex justify-content-between">
                <i id="toggle-left-menu" class="ion-android-menu"></i>
                <div class="right-part">
                    <div class="dropdown mt-2 ">
                        <button class=" back-dropdown dropdown-toggle d-flex  justify-content-center align-items-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img style="object-fit: cover"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlfGbpGndfQmn_5PkAuiifyKRhDRL_GBSop4dxBhwMTydCQinEAsFspOG_hRogwXQeqDI&usqp=CAU"
                                width="40" height="40" class="rounded-circle" alt="">
                            <span class="ms-2 text-uppercase"> {{ auth()->user()->first_name }}</span>
                        </button>
                        <ul class="dropdown-menu">

                            <li class=""><a class="dropdown-item d-flex justify-content-center align-items-center"
                                    href="{{ route('logout') }}"><i class="ion-ios-arrow-right" style="font-size: 15px"></i>
                                    Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

        <div id="page-container">

            @yield('maincontent')
        </div>
    </div>

    <span id="show-lable">Hello</span>
@endsection
