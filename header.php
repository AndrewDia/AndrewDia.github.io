<header id="header" class="header">
    <div class="container">
        <nav class="nav">
            <a href="index.php?=main">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                    <div class="logo-text">
                        <p>Шепетівська ЗОШ<br>І - ІІІ ступенів №1<br>ім. М. Островського</p>
                    </div>
                </div>
            </a>
            <div class="tablet-title">
                Шепетівська ЗОШ І - ІІІ ступенів №1<br>імені Миколи Островського
            </div>
            <div class="phone-title">
                Шепетівська ЗОШ<br>І - ІІІ ступенів №1<br>ім. М. Островського
            </div>
            <div>
                <ul class="menu">
                    <li><a href="index.php?=main">Про школу</a>
                        <ul>
                            <li><a href="#">Інформація про діяльність навчального закладу</a></li>
                            <li><a href="#">Адміністрація</a></li>
                            <li><a href="#">Режим роботи</a></li>
                            <li><a href="#">Нова українська школа</a></li>
                            <li><a href="#">Військово-патріотичне виховання</a></li>
                            <li><a href="#">Правове виховання</a></li>
                            <li><a href="#">Соціально-психологічна служба</a></li>
                            <li><a href="#">Медична служба</a></li>
                        </ul>
                    </li>
                    <li><a href="news.php?=news">Новини</a>
                        <ul>
                            <li><a href="#">Фотогалерея</a></li>
                        </ul>
                    </li>
                    <li><a href="schedule.php?=schedule">Учням</a>
                        <ul>
                            <li><a href="schedule.php?=schedule">Розклад</a></li>
                            <li><a href="#">ЗНО-2021</a></li>
                            <li><a href="#">Блоги</a></li>
                            <li><a href="#">Healthy Schools</a></li>
                            <li><a href="#">STOP Булінг</a></li>
                            <li><a href="#">Правила поведінки здобувачів освіти</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Вчителям</a>
                        <ul>
                            <li><a href="#">Педрада</a></li>
                            <li><a href="#">Підвищення кваліфікації</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Календар</a></li>
                    <li class="last"><a href="contacts.php?=contacts">Контакти</a>
                        <ul>
                            <li><a href="#">Вакансії</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-open">
                    <span></span>
                </div>
                <nav class="menu__body">
                    <ul class="menu__list">
                        <li>
                            <a href="index.php?=main" class="menu__link">Про школу</a>
                            <span class="menu__arrow"></span>
                            <ul class="menu__sub-list">
                                <li><a href="" class="menu__sub-link">Інформація про діяльність навчального закладу</a></li>
                                <li><a href="" class="menu__sub-link">Адміністрація</a></li>
                                <li><a href="#" class="menu__sub-link">Режим роботи</a></li>
                                <li><a href="#" class="menu__sub-link">Нова українська школа</a></li>
                                <li><a href="#" class="menu__sub-link">Військово-патріотичне виховання</a></li>
                                <li><a href="#" class="menu__sub-link">Правове виховання</a></li>
                                <li><a href="#" class="menu__sub-link">Соціально-психологічна служба</a></li>
                                <li><a href="#" class="menu__sub-link">Медична служба</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="news.php?=news" class="menu__link">Новини</a>
                            <span class="menu__arrow"></span>
                            <ul class="menu__sub-list"><li><a href="" class="menu__sub-link">Фотогалерея</a></li></ul>
                        </li>
                        <li>
                            <a href="schedule.php?=schedule" class="menu__link">Учням</a>
                            <span class="menu__arrow"></span>
                            <ul class="menu__sub-list">
                                <li><a href="schedule.php?=schedule" class="menu__sub-link">Розклад</a></li>
                                <li><a href="#" class="menu__sub-link">ЗНО-2021</a></li>
                                <li><a href="#" class="menu__sub-link">Блоги</a></li>
                                <li><a href="#" class="menu__sub-link">Healthy Schools</a></li>
                                <li><a href="#" class="menu__sub-link">STOP Булінг</a></li>
                                <li><a href="#" class="menu__sub-link">Правила поведінки здобувачів освіти</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="menu__link">Вчителям</a>
                            <span class="menu__arrow"></span>
                            <ul class="menu__sub-list">
                                <li><a href="" class="menu__sub-link">Педрада</a></li>
                                <li><a href="#" class="menu__sub-link">Підвищення кваліфікації</a></li>
                            </ul>
                        </li>
                        <li><a href="" class="menu__link">Календар</a></li>
                        <li>
                            <a href="contacts.php?=contacts" class="menu__link">Контакти</a>
                            <span class="menu__arrow"></span>
                            <ul class="menu__sub-list"><li><a href="" class="menu__sub-link">Вакансії</a></li></ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</header>
<script>
    let menuArrows = document.querySelectorAll('.menu__arrow');
    if (menuArrows.length > 0) {
        for (let i = 0; i < menuArrows.length; i++) {
            const menuArrow = menuArrows[i];
            menuArrow.addEventListener("click", function (e) {
                menuArrow.parentElement.classList.toggle('_active');
            });
        }
    }

    const iconMenu = document.querySelector('.menu-open');
    if (iconMenu) {
        const menuBody = document.querySelector('.menu__body');
        iconMenu.addEventListener("click", function (e) {
            document.body.classList.toggle('_lock');
            iconMenu.classList.toggle('_active');
            menuBody.classList.toggle('_active');
        });
    }
</script>
