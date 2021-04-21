@extends('base')

@section('cssForThisPage', 'news')

@section('title', 'Шкільні новини')

@section('content')
<section class="title">
    <div class="news_inner_container">
        <div class="title-panel">
            <h1>Шкільні новини</h1>
            <div class="search">
                <label>
                    <input type="text" placeholder="Пошук новин">
                </label>
                <img src="img/search-button.svg" alt="search-button" class="search-button">
            </div>
        </div>
    </div>
</section>
<main>
    <div class="news-block">
        <div class="news_inner_container">
            <div class="title_for_phone">
                Перемога в конкурсі екскурсоводів
            </div>
            <div class="photo_with_text">
                <div class="picture">
                    <!--                    <div class="cover"></div>-->
                    <img src="img/news1.jpg" alt="photo">
                </div>
                <div class="text_with_button">
                    <h2>Перемога в конкурсі екскурсоводів</h2>
                    <p>Вітаємо Сокальську Ольгу, ученицю 11 класу, та Лілію Гасюк, учителя історії, з перемогою (ІІ
                        місце) в І турі Всеукраїнського конкурсу екскурсоводів музеїв закладів освіти «Край, в якому я
                        живу», що проводився Хмельницьким обласним центром туризму і краєзнавства учнівської молоді 4
                        лютого.</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="news-block">
        <div class="news_inner_container">
            <div class="title_for_phone">
                Премія для талановитих студентів України
            </div>
            <div class="photo_with_text">
                <div class="picture">
                    <div class="cover"></div>
                    <img src="img/news2.png" alt="photo">
                </div>
                <div class="text_with_button">
                    <h2>Премія для талановитих студентів України</h2>
                    <p>Ти студент навчального закладу України? Тоді ця інформація для тебе!<br>
                        Громадська спілка «Український народний контроль» та інформаційний портал Kredit.House
                        запрошують всю талановиту молодь взяти участь у конкурсі.
                        Здійсни свою мрію - отримай Грант (стипендію) на навчання!</p>
                    <button>Дізнатися більше</button>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="news-block">
        <div class="news_inner_container">
            <div class="title_for_phone">
                З 25.01 відновлюється очне навчання
            </div>
            <div class="photo_with_text">
                <div class="picture">
                    <div class="cover"></div>
                    <img src="img/news3.png" alt="photo">
                </div>
                <div class="text_with_button">
                    <h2>З 25.01 відновлюється навчання в очній формі</h2>
                    <p>До уваги учасників освітнього процесу!<br>
                        З 25.01.2021 відновлюється навчання в очній формі.<br><br>
                        Початок занять...</p>
                    <form action="/news1">
                        <button>Дізнатися більше</button>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="news-block">
        <div class="news_inner_container">
            <div class="title_for_phone">
                11 січня розпочинається ІІ семестр
            </div>
            <div class="photo_with_text">
                <div class="picture">
                    <div class="cover"></div>
                    <img src="img/news4.png" alt="photo">
                </div>
                <div class="text_with_button">
                    <h2>11 січня розпочинається ІІ семестр</h2>
                    <p>11 січня 2021р. розпочинаємо ІІ семестр. Освітній процес буде організовано з використанням
                        технологій дистанційного навчання за розкладом занять у синхронному та асинхронному режимах.
                        Освітній процес із використанням технологій дистанційного навчання триватиме з 11 січня 2021
                        року по 24 січня... </p>
                    <form action="/news1">
                        <button>Читати далі</button>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
</main>
@endsection
