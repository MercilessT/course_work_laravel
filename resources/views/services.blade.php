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
            <div class="price but">350 грн / 30 хв - Масаж спини</div>
            <div class="price but">700 грн / 70 хв - Масаж обличчя</div>
            <div class="price but">300 грн / 20-30 хв - Дитячий масаж</div>
            <div class="price but">400 грн / 40 хв - Лікувальна фізкультура</div>
            <div class="price but">350 грн / 30 хв - Реабілітація після травм</div>
        </div>


        <div class="services_button">
            <div class="text"><a href="{{ URL('sign_up') }}" target="_blank">ЗАПИСАТИСЬ</a></div>
        </div>
    </div>
@endsection

