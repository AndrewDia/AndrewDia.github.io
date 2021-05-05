@extends('base')

@section('cssForThisPage', 'pupil_info')

@section('title', 'Інформація про учня')

@section('content')
    <div class="container">
        <div class="inner_container">
            <div class="info">
                <h1>{{ $pupil->name }}</h1>
                <a href="{{ route('class', $pupil->class )}}">
                    <h2>{{ $pupil->class }}</h2>
                </a>
                <p>Класний керівник:</p>
                <h3>{{ $pupil->getClass->head_teacher }}</h3>
            </div>
            <div class="extracurricular">
                <h4>Факультативи:</h4>
                @foreach($pupil->extracurriculars as $extracurricular)
                    <a href="{{ route('extracurricular', $extracurricular->id )}}">
                        <p>{{ $extracurricular->name }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
