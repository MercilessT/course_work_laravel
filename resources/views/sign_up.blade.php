<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="{{ URL::asset('css/sign_up.css') }}">
    <link href="https://fonts.cdnfonts.com/css/helvetica-2" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_sign.png') }}">
</head>
<body>
<div class="container">

    <div class="brand-logo"></div>
    <div class="brand-title">MASSAGE NEST</div>
    <div class="inputs">

        <form action="sign_up/check" method="post">
            @csrf
            @if($errors->get('name'))
                <label class='error'> {{ $errors->get('name')[0] }}</label>
            @else
                <label>Ім'я</label>
            @endif
            <input type="text" name="name" placeholder="Ім'я" value="{{ old('name') }}"/>
            @if($errors->get('phone'))
                <label class='error'> {{ $errors->get('phone')[0] }}</label>
            @else
                <label>Номер телефону</label>
            @endif
            <input type="text" name="phone" placeholder="+38 (___) ___-__-__" value="{{ old('phone') }}">
            <button type="submit" name="submit" value="entry">ЗАПИСАТИСЬ</button>
        </form>
    </div>
    @if(Session::has('success_message'))
        <label class='notification'>{{ Session::get('success_message') }}<label>
    @endif
</div>
</body>
</html>

