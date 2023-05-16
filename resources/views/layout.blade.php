<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,100&display=swap" rel="stylesheet"/>
</head>
<body>
<div class="menu">

    <div class="container">

        <div class="main-logo">
            <a href="{{ URL('landing') }}" class="logo backlight"><img src="{{ URL('images/logo.png') }}" alt="logo" style="width:72px;height:56px;"></a>
            <a href="{{ URL('landing') }}" class="logo-text"><span class="text-logo">MASSAGE NEST</span></a>
        </div>

        <div class="soc-networks">
            <a href="https://www.facebook.com/" target="_blank" class="backlight"><img src="{{ URL('images/facebook.png') }}" alt="facebook" style="width:25px;height:25px;"></a>
            <a href="https://telegram.org/" target="_blank" class="backlight"><img src="{{ URL('images/telegram.png') }}" alt="telegram" style="width:25px;height:25px;"></a>
            <a href="https://www.instagram.com/" target="_blank" class="backlight"><img src="{{ URL('images/instagram.png') }}" alt="instagram" style="width:25px;height:25px;"></a>
        </div>

        <div class="pages">
            <a href="{{ URL('services') }}" class="button">ПОСЛУГИ</a>
            <a href="{{ URL('about_us') }}" class="button">ПРО НАС</a>
            <a href="{{ URL('contacts') }}" class="button">КОНТАКТИ</a>
        </div>


        <a href="https://goo.gl/maps/tr4SWYLfnDEheXLR8" target="_blank" class="location-icon first"><img src="{{ URL('images/location.png') }}" alt="location" style="width:20px;height:20px;"></a>
        <a href="https://goo.gl/maps/tr4SWYLfnDEheXLR8" target="_blank" class="location-text button second">м. Нетішин,<br>просп. Незалежності 11</a>

        <a href="tel:+0673800519" class="phone-icon first"><img src="{{ URL('images/phone.png') }}" alt="call" style="width:20px;height:20px;"></a>
        <a href="tel:+0673800519" class="phone-text button second">+38 (067) 380-05-19<br>Щоденно з 9:00 до 20:00</a>

        <div class="ph-menu">
            <a href="tel:+0673800519"><img src="{{ URL('images/phone.png') }}" alt="call" style="width:30px;height:30px;"></a>
        </div>

        <div class="burger">
            <button class="burgerbtn">
                    <span class="burger-line">
                    </span>
            </button>
        </div>
    </div>
</div>
    @yield('main_content')
<div class="footer">

    <div class="container">

        <div class="logo-and-soc">
            <div class="full-logo">
                <a href="{{ URL('landing') }}" class="logo backlight"><img src="{{ URL('images/logo.png') }}" alt="logo" style="width:72px;height:56px;"></a>
                <a href="{{ URL('landing') }}" class="logo-text"><span class="text-logo">MASSAGE NEST</span></a>
            </div>
            <div class="soc-networks">
                <a href="https://www.facebook.com/" target="_blank" class="backlight"><img src="{{ URL('images/facebook.png') }}" alt="facebook" style="width:25px;height:25px;"></a>
                <a href="https://telegram.org/" target="_blank" class="backlight"><img src="{{ URL('images/telegram.png') }}" alt="telegram" style="width:25px;height:25px;"></a>
                <a href="https://www.instagram.com/" target="_blank" class="backlight"><img src="{{ URL('images/instagram.png') }}" alt="instagram" style="width:25px;height:25px;"></a>
            </div>
        </div>

        <div class="two">
            <div class="chapters">
                <div class="head-ch"><b>РОЗДІЛИ</b></div>
                <a href="{{ URL('services') }}" class="button">ПОСЛУГИ</a>
                <a href="{{ URL('about_us') }}" class="button">ПРО НАС</a>
                <a href="{{ URL('contacts') }}" class="button">КОНТАКТИ</a>
            </div>

            <div class="contacts">
                <div class="head-con"><b>КОНТАКТИ</b></div>
                <div class="con-loc">
                    <a href="https://goo.gl/maps/tr4SWYLfnDEheXLR8" target="_blank" class="location-icon first"><img src="{{ URL('images/location.png') }}" alt="location" style="width:20px;height:20px;"></a>
                    <a href="https://goo.gl/maps/tr4SWYLfnDEheXLR8" target="_blank" class="button second">м. Нетішин, просп. Незалежності 11</a>
                </div>

                <div class="con-phone">
                    <a href="tel:+0673800519" class="phone-icon first"><img src="{{ URL('images/phone.png') }}" alt="call" style="width:20px;height:20px;"></a>
                    <a href="tel:+0673800519" class="button second">+38 (067) 380-05-19 (щоденно з 9:00 до 20:00)</a>
                </div>


                <div class="con-mail">
                    <a href="mailto:irenavoitko@gmail.com" class="mail-icon first"><img src="{{ URL('images/mail.png') }}" alt="mail" style="width:20px;height:20px;"></a>
                    <a href="mailto:irenavoitko@gmail.com" class="button second">irenavoitko@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/menu.js') }}"></script>
</body>
</html>



