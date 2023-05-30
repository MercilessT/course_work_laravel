@extends('layout')

@section('title')
    Дитячий масаж
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
    @foreach($baby_services as $service)
        <div class="services-bd">{{ $service->name }}</div>
        @foreach($descriptions as $description)
            @if($description->service_id === $service->id)
                @php
                    $paragraphs = explode("\n", $description->description);
                @endphp
                @foreach ($paragraphs as $paragraph)
                    <div class="description-bd">{!! nl2br($paragraph) !!}</div>
                @endforeach
            @endif
       @endforeach
    @endforeach
@endsection


