@extends('layouts.app')

@section('header')
    <div class="container">
        <div class="logo">
            <img src="/images/dc-logo.png" alt=""> 
        </div>
        @foreach ($links as $link)
            <div class="link-list">
                <a href="#">{{ $link }}</a>
            </div>
        @endforeach
        
    </div>
@endsection
