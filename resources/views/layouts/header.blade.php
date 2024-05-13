@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div id="logo">
        <span class="big-logo">.S!mple</span>
        <span class="small-logo">S!M</span>
    </div>
    <div id="left-menu">
        <ul>
            <li class="active"><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Dashboard</span>
                </a></li>
            <li class=""><a href="{{ route('menu') }}">
                    <i class="ion-android-menu"></i>
                    <span>Admin Menu</span>
                </a></li>
            <li class="has-sub">
                <a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>UI Elements</span>
                </a>
                <ul>
                    <li><a href="#">UI Elements Item 1</a></li>
                    <li><a href="#">UI Elements Item 2</a></li>
                    <li><a href="#">UI Elements Item 3</a></li>
                </ul>
            </li>


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
                            <span class="ms-2">Super Admin</span>
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
