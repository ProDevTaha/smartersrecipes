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
    <div class="container mt-4 py-5 shadow-lg bg-light p-3">
        <h1 class="display-4 text-primary mb-4">Return Policy</h1>
        <p class="lead">At Moroccan Essence, we are committed to providing you with high-quality Moroccan food products. If for any reason you are not completely satisfied with your purchase, please review our return policy below.</p>

        <h2 class="text-warning mt-4">Eligibility for Returns</h2>
        <p>To be eligible for a return, the following conditions must be met:</p>
        <ul>
            <li>The item must be returned within 14 days of receipt.</li>
            <li>The product must be unopened, unused, and in its original packaging.</li>
            <li>Proof of purchase or receipt must be provided.</li>
        </ul>

        <h2 class="text-warning mt-4">Non-Returnable Items</h2>
        <p>Due to the nature of our products, the following items cannot be returned:</p>
        <ul>
            <li>Opened or used food items.</li>
            <li>Perishable goods.</li>
        </ul>

        <h2 class="text-warning mt-4">How to Initiate a Return</h2>
        <p>To initiate a return, please follow these steps:</p>
        <ol>
            <li>Contact our customer service team at <a href="mailto:contact@smartersrecipes.com">contact@smartersrecipes.com</a> to request a return authorization.</li>
            <li>Provide your order number, a description of the issue, and a photo of the product (if applicable).</li>
            <li>Once approved, you will receive instructions for returning the product to us.</li>
        </ol>

        <h2 class="text-warning mt-4">Refunds and Exchanges</h2>
        <p>Upon receiving and inspecting the returned item, we will process your refund or exchange within 5-7 business days. Refunds will be issued to the original payment method. Please note that shipping costs are non-refundable.</p>

        <h2 class="text-warning mt-4">Contact Us</h2>
        <p>If you have any questions or need further assistance, please contact us at <a href="mailto:contact@smartersrecipes.com">contact@smartersrecipes.com</a> or call us at +447832409166.</p>

        <p class="mt-4">Thank you for shopping with Moroccan Essence . We value your satisfaction and strive to make your experience with us as pleasant as possible.</p>
    </div>

    <!-- footer section -->
    @include('footer')
    <!-- footer section -->
@endsection