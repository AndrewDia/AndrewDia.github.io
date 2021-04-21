@extends('base')

@section('cssForThisPage', 'contacts')

@section('title', 'Контакти')

@section('content')
<section class="title">
    <div class="inner_container">
        <div class="title-text">
            <h1>Контакти</h1>
        </div>
    </div>
</section>
<main>
    <div class="inner_container">
        <div class="text-block">
            <h2>Електронна пошта:</h2>
            <p>shzosh1@i.ua</p>
            <p>&nbsp;</p>
            <h2>Телефони:</h2>
            <p>директор 4-10-11<br>
                секретар 4-10-11<br>
                заступники 4-06-79<br>
                початкова школа 5-82-00</p>
            <p>&nbsp;</p>
            <h2>Адреса:</h2>
            <p>вул. Островського, 3,<br>
                Шепетівка, 30405
            </p>
        </div>
        <div class="map-block">
            <h2>Ми на карті:</h2>
            <div class="map">
                <iframe width=100% height=100%
                        src="https://maps.google.com/maps?hl=en&amp;q=%D1%88%D0%B5%D0%BF%D0%B5%D1%82%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0%20%D0%97%D0%BE%D1%88%201+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"
                        frameborder="0" scrolling="no"></iframe>
            </div>
            <!--            https://embedgooglemaps.com/ru/-->
        </div>
    </div>
</main>
<a name="forma" ></a>
<form action="/contacts#forma" method="post">
    @csrf
    <h3>Звернутися до адміністрації школи з питань навчального процесу:</h3>
    <div class="question_block">
        <input type="text" name="name" placeholder="Введіть ім’я" class="name_and_email">
        <input type="email" name="email" placeholder="Введіть e-mail" class="name_and_email">
        <textarea name="message" placeholder="Введіть повідомлення"></textarea>
    </div>
    <button type="submit">Надіслати</button>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="success_message"> {{ $error }} </div>
        @endforeach
    @elseif (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
        <div class="success_message">Ви успішно відправили листа. Очікуйте на відповідь!</div>
    @endif

</form>
@endsection
