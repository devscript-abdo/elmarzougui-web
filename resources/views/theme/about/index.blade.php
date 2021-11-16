@extends('layouts.app')

@section('content') 

    @include('theme.about._header')

    @include('theme.about._about')

    {{--@include('theme.about._team')--}}

    @include('theme.about._clients')

@endsection