@extends('layout.app')

@section('page-title', 'DC COMICS -Show')
@section('main-content')
   
    {{-- barra blu sotto jumbotron con immagine fumetto all'interno --}}
    <div class="blu-bar">
        <img src="{{ $prodotto_singolo['image']}}" alt="Comic Image" class="cards-img-top">
      </div>
      {{-- card con titolo e descrizione --}}
      <div class="card-comic">
        @if (session('success'))  
        <div class="mt-4 w-50 m-auto alert alert-success">
            {{session('success')}}
        </div>
        @endif
          <div class="cards-body">
            <h5 class="cards-title">{{ $prodotto_singolo['title'] }}</h5>
            {{-- barra verde con prezzo --}}
            <div class="green-bar">
              <div class="price">
                <span>U.S. Price: {{ $prodotto_singolo['price'] }}</span>
                <span>Availabile</span>
              </div>
              <div class="availability">
                  <div class="line"></div>
                  <div class="check">Check Availability</div>
              </div>
            </div>        
            <p class="cards-text">{{ $prodotto_singolo['description'] }}</p>
          </div>
        </div>
        {{-- Sezione grigia con informazioni fumetto generate dinamicamente  --}}
        <section class="grey-section">
          <div class="center-section">
          <div class="left-container">
            <h2>Talent</h2>
            <div class="inside-cont">
              <h5>Art by:</h5>
              <p>
                {{-- @foreach ($prodotto_singolo['artists'] as $elem)
               {{ $elem }},
                @endforeach --}}
              </p>
            </div>
            <div class="inside-cont">
              <h5>Written by:</h5>
              <p>
                {{-- @foreach ($prodotto_singolo['writers'] as $elem)
               {{ $elem }},
                @endforeach --}}
              </p>
            </div>
          </div>
          <div class="right-container">
            <h2>Specs</h2>
            <div class="inside-cont">
              <h5>Series: </h5>
              <p>{{$prodotto_singolo['series']}}</p>
            </div>
            <div class="inside-cont">
              <h5>U.S. Price: </h5>
              <p>{{$prodotto_singolo['price']}}</p>
            </div>
            <div class="inside-cont">
              <h5>On Sale Date: </h5>
              <p>{{$prodotto_singolo['sale_date']}}</p>
            </div>
          </div>
        </div>
        </section>

        <style>
            .blu-bar{
    height: 100px;
    width: 100%;
    background-color: #0082F9;
    position: relative;
}

.card-comic {
    width: 100%;
    margin: 0 auto;
}

.cards-img-top {
    position: absolute;
    bottom: 20px;
    left: 20%;
    border: 2px solid white;
}

.cards-body {
    width: 60%;
    margin: 70px auto;
}

.cards-title {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}

.green-bar {
    background-color: #55BB59;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid rgb(3, 76, 3);
}

.price {
    color: white;
    font-weight: bold;
    padding: 0.5em;
    flex-grow: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.availability {
    display: flex;
    align-items: center;
    padding: 0.5em;
    color: white;
    font-weight: bold;
}

.line {
    border-left: 1px solid rgb(3, 76, 3);
    height: 2em;
    margin: 0 0.5em;
}

.check {
    padding-left: 0.5em;
}


.cards-text {
    font-size: 17px;
    line-height: 1.5;
    margin: 20px 0;
    color: rgb(76, 75, 75);
}

.grey-section{
    background-color: #F6F6F6;
    padding: 40px 0;
    border-top: 2px solid rgb(239, 237, 237) ;
    color: rgb(10, 46, 137);
}
.grey-section > h2{
        margin-bottom: 40px;
    }


.center-section{
    display: flex;
    justify-content: space-between;
    width: 60%;
    margin: 0 auto;
}

.inside-cont{
    display: flex;
    justify-content: space-between;
    border-top: 1px solid lightgray ;
    padding: 15px 0;
}
.inside-cont > h5{
        flex-basis: 30%;
        font-size: 1.1rem;
    }

.inside-cont > p{
        flex-basis: 70%;
        color: rgb(43, 157, 228);
        font-size: 0.9rem;
    }


.inside-cont:last-child{
    border-bottom: 1px solid lightgray ;
}

.left-container{
    flex-basis: 60%;
}

.right-container{
    flex-basis: 35%;
}
        </style>
@endsection