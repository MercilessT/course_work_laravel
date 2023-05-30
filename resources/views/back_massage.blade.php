@extends('layout')

@section('title')
    Масаж спини
@endsection

@section('main_content')
    <link rel="stylesheet" href="{{ URL::asset('css/massage_services.css') }}">
    <div class="main">
        <div class="right-menu">
            <ul class="menu-list">
                <li><a href="{{ URL('services') }}" class="bm button">ПОСЛУГИ</a></li>
                <li><a href="{{ URL('about_us') }}" class="bm button">ПРО НАС</a></li>
                <li><a href="{{ URL('contacts') }}" class="bm button">КОНТАКТИ</a></li>
            </ul>
        </div>
    </div>
    <div class="indent"><div>
    @foreach($back_services as $service)
        <div class="services-bd">{{ $service->name }}</div>
        @foreach($descriptions as $description)
            @if($description->service_id === $service->id)
                <div class="description-bd"> {{ $description->description }} </div>
            @endif
        @endforeach
    @endforeach

@endsection

