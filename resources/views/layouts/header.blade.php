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
            <li><a href="#">
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
                </a></li>

        </ul>
    </div>
    <div id="main-content">
        <div id="header">
            <div class="header-left float-left">
                <i id="toggle-left-menu" class="ion-android-menu"></i>
            </div>
            <div class="header-right float-right">
                <i class="ion-ios-people"></i>
            </div>
        </div>

        <div id="page-container">
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="html" type="checkbox" class="magic-checkbox">
                                    <label for="html">HTML</label>

                                    <input id="css" type="checkbox" class="magic-checkbox">
                                    <label for="css">CSS</label>

                                    <input id="js" type="checkbox" class="magic-checkbox">
                                    <label for="js">Javascript</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="job" id="designer" type="radio" class="magic-radio">
                                    <label for="designer">Web designer</label>

                                    <input name="job" id="developer" type="radio" class="magic-radio">
                                    <label for="developer">Web developer</label>

                                    <input name="job" id="frontened" type="radio" class="magic-radio">
                                    <label for="frontened">Frontened</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Button</label> <br>
                                    <button class="btn btn-primary">Sumbmit</button>
                                    <button class="btn btn-warning">Sumbmit</button>
                                    <button class="btn btn-info">Sumbmit</button>
                                    <button class="btn btn-danger">Sumbmit</button>
                                    <button class="btn btn-secondary">Sumbmit</button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Languages</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">HTML</option>
                                        <option value="">CSS</option>
                                        <option value="">JS</option>
                                        <option value="">PHP</option>
                                        <option value="">SQL</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="title">Users</div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword"
                                            placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                            value="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword"
                                            placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span id="show-lable">Hello</span>
@endsection
