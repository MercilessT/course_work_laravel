<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/04ddbe175f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,100&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ URL::asset('css/massages.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_sign.png') }}">
    <title>Відхилені</title>
</head>
<body>
<div class="main-text">Відхилені</div>
<div class="links">
    <a href="{{ URL('accept') }}">Прийняті</a>
    <a href="{{ URL('massages') }}">Записи на массаж</a>
</div>
@foreach($rejects as $reject)
    @if($loop->iteration % 2 === 0)
        <div class="registrations-odd">
            {{ $loop->iteration }}.
            <span class="name">{{ $reject->name }}</span>
            <span class="phone">{{ $reject->phone_number }}</span>
            <div class="icons-wrapper">
                <i class="fa-solid fa-check icon" style="color: #49db14;"></i>
                <i class="fa-solid fa-xmark x-mark icon" style="color: #dd2222;"></i>
            </div>
        </div>
    @else
        <div class="registrations-even">
            {{ $loop->iteration }}.
            <span class="name">{{ $reject->name }}</span>
            <span class="phone">{{ $reject->phone_number }}</span>
            <div class="icons-wrapper">
                <i class="fa-solid fa-check icon" style="color: #49db14;"></i>
                <i class="fa-solid fa-xmark x-mark icon" style="color: #dd2222;"></i>
            </div>
        </div>
    @endif
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.fa-check').click(function() {

            // Знайти батьківський блок
            var block = $(this).closest('.registrations-even, .registrations-odd');

            // Отримати інформацію з блоку
            var name = block.find('.name').text();
            var phone = block.find('.phone').text();

            // Дії з отриманими даними
            console.log('Ім\'я:', name);
            console.log('Телефон:', phone);

            $.ajax({
                url: "{{ URL('accept-delete-data') }}",
                method: 'POST',
                data: {
                    name: name,
                    phone: phone
                },
                success: function(response) {
                    // Обробка успішної відповіді від сервера
                    console.log('Дані успішно збережені у базі даних');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Обробка помилки при надсиланні запиту
                    console.log('Виникла помилка при збереженні даних');
                }
            });
        });


        $('.fa-xmark').click(function() {

            // Знайти батьківський блок
            var block = $(this).closest('.registrations-even, .registrations-odd');

            // Отримати інформацію з блоку
            var name = block.find('.name').text();
            var phone = block.find('.phone').text();

            // Дії з отриманими даними
            console.log('Ім\'я:', name);
            console.log('Телефон:', phone);

            $.ajax({
                url: "{{ URL('delete-delete-data') }}",
                method: 'POST',
                data: {
                    name: name,
                    phone: phone
                },
                success: function(response) {
                    // Обробка успішної відповіді від сервера
                    console.log('Дані успішно збережені у базі даних');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Обробка помилки при надсиланні запиту
                    console.log('Виникла помилка при збереженні даних');
                }
            });
        });
    });
</script>
</body>
</html>
