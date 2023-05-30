@extends('layout')

@section('title')
    Послуги
@endsection

@section('main_content')
    <link rel="stylesheet" href="{{ URL::asset('css/services.css') }}">
    <div class="main">
        <div class="right-menu">
            <ul class="menu-list">
                <li><a href="{{ URL('services') }}" class="bm button">ПОСЛУГИ</a></li>
                <li><a href="{{ URL('about_us') }}" class="bm button">ПРО НАС</a></li>
                <li><a href="{{ URL('contacts') }}" class="bm button">КОНТАКТИ</a></li>
            </ul>
        </div>
        <div class="our_services">Наші послуги</div>

        <div class="prices">
            <div class="price but"><a href="{{ URL('back_massage') }}"> 350 грн / 30 хв - Масаж спини</a></div>
            <div class="price but"><a href="{{ URL('face_massage') }}">700 грн / 70 хв - Масаж обличчя</a></div>
            <div class="price but"><a href="{{ URL('baby_massage') }}">300 грн / 20-30 хв - Дитячий масаж</a></div>
            <div class="price but"><a href="{{ URL('therapeutic_pe') }}">400 грн / 40 хв - Лікувальна фізкультура</a></div>
            <div class="price but"><a href="{{ URL('injury_rehabilitation') }}">350 грн / 30 хв - Реабілітація після травм</a></div>
        </div>


        <a href="{{ URL('sign_up') }}" target="_blank">
            <div class="services_button">
                <div class="text">ЗАПИСАТИСЬ</div>
            </div>
        </a>
    </div>
@endsection

