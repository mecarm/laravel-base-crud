@extends('layout.app')
@section('main-content')
    <h1 class="text-center my-3">CREATE PAGE COMIC</h1>
    <form class="w-50 m-auto my-4" action="{{route('movies.update', $comic->id)}}" method="POST">

        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label class="form-label" for="">Title</label>
            <input value=" {{$comic->title}} " class="form-control" type="text" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Description</label>
            <textarea class="form-control" name="description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Image</label>
            <input value="{{$comic->image}}" class="form-control" type="text" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Price</label>
            <input value="{{$comic->price}}" class="form-control" type="number" name="price" step="0.01">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Series</label>
            <input value="{{$comic->series}}" class="form-control" type="text" name="series">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Sales Date</label>
            <input value="{{$comic->sale_date}}" class="form-control" type="date" name="sale_date">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Type</label>
            <input value="{{$comic->type}}" class="form-control" type="text" name="type">
        </div>
        <button class="btn btn-primary" type="submit">Modifica dato</button>
    </form>
@endsection
