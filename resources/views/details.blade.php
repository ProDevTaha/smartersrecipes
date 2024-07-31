@extends('layout')

@section('content')
  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo.png')}}" alt="" /><span>
                Smartersrecipes
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/privacy">Privacy Policy</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/return">Return Policy</a>
                </li>
            </ul>
        </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- service section -->

  <div class="container p-4 ">
    <div class="card" style="border: none">
        <div class="card-body">
            <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="text-center"><img src="{{asset('images/'.$data['img'])}}" class="rounded img-responsive w-100"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p>{!!$data['description']!!}</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  @include('footer')
  <!-- end service section -->
@endsection