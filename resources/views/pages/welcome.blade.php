@extends('layout.app')

@section('page-title', 'DC COMICS -HOME')

@section('main-content')
    <h1 class="text-center pt-5">
        Benvenuto nel mondo della DC COMICS
    </h1>
    <h2 class="pt-3">Esplora i nostri fumetti cliccando qui -> <a href="{{ route('movies.index') }}">Comics</a></h2>
    <h2 class="pt-3">Oppure clicca il pulsante comics nel menù in alto</h2>
@endsection