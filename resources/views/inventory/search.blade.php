@extends('layouts.header')
@section('maincontent')
    <section class="section">
        <h1>Inventory Search </h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="p-3 text-right px-5 mb-1">
                            <label for="search">Search</label>
                            <input type="text" id="search" autofocus class="form-control">
                        </div>
                        <table class="table" id="myTableSearch">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Qty</th>
                                    <th>Price</th>
                                </tr>
                            </thead>

                            <tbody>


                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
