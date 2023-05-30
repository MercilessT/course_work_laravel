<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вхід в кабінет</title>
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

        <form action="entry/check" method="post">
            @csrf
            @if($errors->get('email'))
                <label class='error'> {{ $errors->get('email')[0] }}</label>
            @else
                <label>Email</label>
            @endif
            <input type="text" name="email" placeholder="email" value="{{ old('email') }}"/>
            @if($errors->get('password'))
                <label class='error'> {{ $errors->get('password')[0] }}</label>
            @else
                <label>Пароль</label>
            @endif
            <input type="password" name="password" placeholder="пароль">
            <button type="submit" name="entry" value="entry">ВХІД</button>
        </form>
    </div>
</div>
</body>
</html>

