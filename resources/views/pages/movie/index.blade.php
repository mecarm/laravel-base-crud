@extends('layout.app')
@section('page-title', 'DC COMICS -Comics')
@section('font-awesome')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('main-content')
<div class="black">
    @if (session('success'))
        <div class=" w-50 m-auto alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="cards">
        @foreach ($movies as $elem)
            <div class="fumetto">
                <img src="{{$elem['image']}}" alt="fumetto">
                <div id="hover-me">
                    <form action="{{route('movies.destroy', $elem->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                    <button class="btn btn-light">
                        <a href="{{route('movies.edit', $elem->id)}}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </button>
                </div>
                <h5><a href="{{ route('movies.show', $elem->id) }}">{{$elem['title']}}</a></h5>
            </div>
        @endforeach
    </div>
  </div>

  <style>
.black {
    background-color: #1C1C1C;
}

a{
    cursor: pointer;
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

#hover-me{
    display: none;
}

.fumetto:hover #hover-me{
    position: relative;
    top: -200px;
    left: 40%;
    display: inline-block;
    color: white;
} 

.fumetto:hover img{
    opacity: 0.1;
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