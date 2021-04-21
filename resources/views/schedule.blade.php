@extends('base')

@section('cssForThisPage', 'schedule')

@section('title', 'Розклад уроків')

@section('content')
    <section class="title">
        <div class="inner_container">
            <div class="title-text">
                <h1>Розклад уроків</h1>
            </div>
        </div>
    </section>
    <main>
        <div class="inner_container">
            <div class="center_block">
                <form method="get">
                    <label>Твій клас:<input type="text" name="class"></label>
                    <button type="submit"></button>
                </form>
                <?php
                if (empty(($_GET['class']))) {
                } else {
                    $class = str_replace(' ', '', mb_strtoupper(htmlspecialchars(trim($_GET['class']))));
                    switch ($class) {
                        case "5-А":
                            echo "$class";
                            echo "<img src='img/5schedule.jpg' alt='5-А'/>";
                            break;
                        case "6-А":
                            echo "$class";
                            echo "<img src='img/6schedule.jpg' alt='6-А'/>";
                            break;
                        case "7-А":
                            echo "$class";
                            echo "<img src='img/7schedule.jpg' alt='7-А'/>";
                            break;
                        case "8-А":
                            echo "$class";
                            echo "<img src='img/8schedule.jpg' alt='8-А'/>";
                            break;
                        case "9-А":
                            echo "$class";
                            echo "<img src='img/9schedule.jpg' alt='9-А'/>";
                            break;
                        default:
                            echo "Такого класу немає. Перевірте введені дані та вибрану мову";
                    }
                }
                ?>
            </div>
        </div>
    </main>
@endsection
