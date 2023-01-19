@extends('layout.app')
@section('main-content')
<div class="black">
    <div class="cards">
        @foreach ($movies as $elem)
            <div class="fumetto">
                <img src="{{$elem['image']}}" alt="fumetto">
                <h5><a href="#">{{$elem['title']}}</a></h5>
            </div>
        @endforeach
    </div>
  </div>

  <style>
    .black {
    background-color: #1C1C1C;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    width: 80%;
    margin: 0px auto;
}

.fumetto {
    width: calc(100% / 6);
    padding: 20px;
    cursor: pointer;
}


.fumetto img {
    width: 100%;
    object-fit: cover;
    object-position: top;
}

.fumetto h5 a {
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.fumetto h5 a:hover {
    color: rgb(0, 162, 255);
}
  </style>
@endsection