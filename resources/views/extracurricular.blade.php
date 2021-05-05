@extends('base')

@section('cssForThisPage', 'pupil_info')

@section('title', 'Список учнів факультативу')

@section('content')
    <div class="container">
        <div class="inner_container">
            <div class="class_list">
                <h1>Список учнів факультативу "{{ $extracurricular->name }}"</h1>
                @foreach($extracurricular->pupils as $pupil)
                    <p>
                        <a href="{{route('class', $pupil->class)}}">
                            {{$pupil->class}}
                        </a>
                        &emsp;
                        <a href="{{route('pupil', $pupil->id)}}">
                            {{ $pupil->name}}
                        </a>
                    </p>
                @endforeach
                <p>&nbsp;</p>
                <p>Кількість відвідувачів - <b>{{ $extracurricular->pupils->count() }}</b></p>
                <h3>Навчальний керівник: {{ $extracurricular->head }}</h3>
                <form action="{{ route('extracurriculars') }}">
                    <button>Повернутися до списку факультативів</button>
                </form>
            </div>
        </div>
    </div>
@endsection
