@extends('layouts.app')

@section('title', 'Dashboard')

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
            {{-- <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li class="has-sub">
                <a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>UI Elements</span>
                </a>
                <ul>
                    <li><a href="#">UI Elements Item 1</a></li>
                </ul>
            </li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Table</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Grid system</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Permission</span>
                </a></li>
            <li><a href="#">
                    <i class="ion-ios-person-outline"></i>
                    <span>Users</span>
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
            <li class="has-sub">
                <a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Report</span>
                </a>
                <ul>
                    <li><a href="#">Report Item 1</a></li>
                    <li><a href="#">Report Item 2</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                </ul>
            </li>
            <li><a href="#">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Users</span>
                </a></li>
            <li class="has-sub">
                <a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Report</span>
                </a>
                <ul>
                    <li><a href="#">Report Item 1</a></li>
                    <li><a href="#">Report Item 2</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                    <li><a href="#">Report Item 3</a></li>
                </ul>
            </li>
            <li><a href="#">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <span>Setting</span>
                </a></li> --}}

        </ul>
    </div>
    <div id="main-content">
        <div id="header" class="w-100 ">
            <div class="header-left  d-flex justify-content-between">
                <i id="toggle-left-menu" class="ion-android-menu"></i>
                <i class="ion-ios-people"></i>
            </div>
            <div class="">
            </div>
        </div>

        <div id="page-container">


        </div>
    </div>

    <span id="show-lable">Hello</span>
@endsection
