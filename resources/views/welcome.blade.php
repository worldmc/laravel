@extends('layouts.default')

@section('title')
    test
@endsection

@section('content')

@if ( Sentinel::check())
    you are a logged in user<br>
@else
    you are a guest<br>
@endif
    <h5>test, this is appended to the content.</h5>


@endsection


@show