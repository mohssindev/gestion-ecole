@extends('layouts.layout')

@section('title')
<title>Home</title>
@endsection


@section('content')
<div class="slider">
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <h1>Welcome To <span>Agadir</span><span>Sms</span> School Management System.</h1>
          <div class="overlay"></div>
          <div class="carousel-item carousel-1 active">
          </div>
          <div class="carousel-item carousel-2">
          </div>
          <div class="carousel-item carousel-3">
          </div>
        </div>

      </div>
</div>{{-- end slider --}}
@endsection
