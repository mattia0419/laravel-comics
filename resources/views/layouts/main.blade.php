@extends('layouts.app')

@section('main')
    
<img class="jumbotron" src="/images/jumbotron.jpg" alt="">
<div class="container-label">
  <div class="label">
    <h4>CURRENT SERIES</h4>
  </div>
</div>

<div class="container">
  <div class="content">
    <div class="card-container">
        @foreach($books as $book)
        <div class="card">
            <img src="{{ $book['thumb'] }}" alt="">
            <p>{{ $book['title'] }}</p>
        </div>
        @endforeach
    </div>
</div>


</div>
<div class="load-button">
  <button class="blu-small-button">
    <h3>LOAD MORE</h3>
  </button>
</div>
    
@endsection