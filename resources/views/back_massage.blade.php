@extends('layout')

@section('title')
    Про нас
@endsection

@section('main_content')
    <link rel="stylesheet" href="{{ URL::asset('css/massage_services.css') }}">
    @foreach($back_services as $service)
        <div>{{ $service->name }}</div>
        @foreach($descriptions as $description)
            @if($description->service_id === $service->id)
                <div> {{ $description->description }} </div>
            @endif
        @endforeach
    @endforeach
@endsection

