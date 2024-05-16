@extends('layouts.header')
@section('maincontent')
    <div class="fs-1 text-center">
        {{ auth()->user()->first_name }}
    </div>
@endsection
