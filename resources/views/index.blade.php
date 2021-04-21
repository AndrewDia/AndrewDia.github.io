@extends('base')

@section('cssForThisPage', 'index')

@section('title', 'Шепетівська ЗОШ №1')

@section('content')
<section class="banner">
    <div class="banner_container">
        <div class="cover">
            <h1 class="title">Шепетівська<br>загальноосвітня школа<br>І-ІІІ ступенів №1<br>ім. М. Островського</h1>
        </div>
    </div>
</section>
<section class="goal">
    <div class="goal-container">
        <div class="goal-text">
            <h2>Наше завдання –</h2>
            <p class="info">кожній дитині дати доступ до якісної освіти. Успіх України в тому, щоб
                побудувати суспільство освіченого загалу, бо кожна дитина, незалежно від її
                здібностей, має право на успіх в житті, на максимальне розкриття власних
                здібностей, яке може запропонувати якісна освіта.
            </p>
            <p class="author">Лілія Гриневич</p>
        </div>
    </div>
</section>
<section class="pupils">
    <div class="container">
        <div class="about">
            <div class="text_with_photo"></div>
            <div class="text_with_button">
                <p>Становлення української державності, інтеграція у європейське,
                    світове співтовариство, відмова від тоталітарних методів
                    управління державою передбачають орієнтацію на Людину,
                    пріоритети духовної культури, визначають основні напрями
                    реформування освіти в цілому та навчально-виховного процесу
                    в школі зокрема. Європейське суспільство, до якого ми
                    прагнемо, – це освічена громада, високої культури і рівних
                    можливостей, яка забезпечує європейську якість життя. Щоб
                    виховати європейця, сучасна школа має видозмінитися,
                    європеїзуватися, не втрачаючи при цьому національного
                    обличчя, позитивних традицій, які маємо. Тому в основу
                    розвитку навчального закладу покладено модель Школи
                    європейської освіти та культури.</p>
                <button>Дізнатися більше</button>
            </div>
        </div>
    </div>
</section>
<section class="events_and_news">
    <div class="events_and_news_container">
        <div class="events">
            <h3>Події</h3>
            <div class="coming_events">
                <div class="single_event">
                    <div class="date">
                        <p class="number">9</p>
                        <p class="month">ЛЮТ 2021</p>
                    </div>
                    <div class="event_on_this_date">
                        День Безпечного Інтернету
                    </div>
                </div>
                <div class="single_event">
                    <div class="date">
                        <p class="number">8</p>
                        <p class="month">БЕР 2021</p>
                    </div>
                    <div class="event_on_this_date">
                        Міжнародний жіночий день
                        <div class="additional">Вихідний</div>
                    </div>
                </div>
                <div class="single_event">
                    <div class="date">
                        <p class="number">10</p>
                        <p class="month">КВІ 2021</p>
                    </div>
                    <div class="event_on_this_date">
                        Пробне ЗНО
                    </div>
                </div>
            </div>
            <button class="calendar">Переглянути календар</button>
        </div>
        <div class="news">
            <h3>Новини</h3>
            <hr>
            <div class="news-block">
                <div class="news-title">Перемога в конкурсі екскурсоводів</div>
                <div class="publication_date">
                    <img src="img/clock.png" alt="clock">
                    <span>4 лютого, 2021</span>
                </div>
            </div>
            <hr>
            <div class="news-block">
                <div class="news-title">З 25.01 відновлюється очне навчання</div>
                <div class="publication_date">
                    <img src="img/clock.png" alt="clock">
                    <span>22 січня, 2021</span>
                </div>
            </div>
            <hr>
            <div class="news-block">
                <div class="news-title">11 січня розпочинається ІІ семестр</div>
                <div class="publication_date">
                    <img src="img/clock.png" alt="clock">
                    <span>5 січня, 2021</span>
                </div>
            </div>
            <hr class="last-hr">
            <form action="/news">
                <button>Дізнатися більше</button>
            </form>
        </div>
    </div>
</section>
@endsection
