@extends('base')

@section('cssForThisPage', 'pupil_info')

@section('title', 'Список учнів')

@section('content')
    <div class="container">
        <div class="inner_container">
            <div class="class_list">
                <h1>Список учнів {{ $list->name }} класу</h1>
                @foreach($list->pupils as $pupil)
                    <a href="{{route('pupil', $pupil->id)}}"><p>{{$pupil->name}}</p></a>
                @endforeach
                <p>&nbsp;</p>
                <p>Учнів у класі - <b>{{ $list->pupils->count() }}</b></p>
                <h3>Класний керівник: {{ $list->head_teacher }}</h3>
            </div>
        </div>
    </div>
@endsection
