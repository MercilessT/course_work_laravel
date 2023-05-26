@extends('layout')

@section('title')
    Про нас
@endsection

@section('main_content')
    <link rel="stylesheet" href="{{ URL::asset('css/massage_services.css') }}">
    @foreach($injury_rehabilitation_services as $service)
        <div>{{ $service->name }}</div>
    @endforeach
@endsection

