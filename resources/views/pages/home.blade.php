@extends('master')

@section('content')
    Home Page1111


{{--    <h1> {{ $value }} </h1>--}}

    @foreach($names as $name)
        <h2>{{$name }}</h2>
    @endforeach
@stop
