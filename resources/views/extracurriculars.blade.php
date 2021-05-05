@extends('base')

@section('cssForThisPage', 'pupil_info')

@section('title', 'Факультативи')

@section('content')
    <div class="container">
        <div class="curricular_block">
            @foreach($extracurriculars as $extracurricular)
                <a href="{{ route('extracurricular', $extracurricular->id) }}">
                    <div class="curricular_info">
                        <h2>{{ $extracurricular->name }}</h2>
                        <p><span>Кількість відвідувачів: </span><b>{{ $extracurricular->pupils->count() }} </b></p>
                        <p><span>Керівник: </span><b>{{ $extracurricular->head }}</b></p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
