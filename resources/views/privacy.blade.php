@extends('layout')

@section('content')
    <div class="hero_area" style="height: 14vh">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="/">
                    <img src="images/logo.png" alt="" /><span>
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
        <h1 class="display-4 text-primary mb-4">Privacy Policy</h1>
        <p class="lead">At Moroccan Essence, we value your privacy and are committed to protecting your personal information. This Privacy Policy outlines how we collect, use, and safeguard your data when you visit our website or use our services.</p>

        <h2 class="text-warning mt-4">1. Information We Collect</h2>
        <p>We collect information to provide and improve our services. This includes:</p>
        <ul>
            <li><strong>Personal Information:</strong> Such as your name, email address, and contact details when you make a purchase or contact us.</li>
            <li><strong>Payment Information:</strong> Details required to process transactions, such as credit card numbers, are securely processed by our payment partners.</li>
            <li><strong>Usage Data:</strong> Information about how you interact with our website, including IP addresses, browser types, and pages visited.</li>
        </ul>

        <h2 class="text-warning mt-4">2. How We Use Your Information</h2>
        <p>We use your information for various purposes, including:</p>
        <ul>
            <li>Processing and fulfilling orders.</li>
            <li>Improving our website and services.</li>
            <li>Sending promotional materials, if you have opted in.</li>
            <li>Responding to your inquiries and providing customer support.</li>
        </ul>

        <h2 class="text-warning mt-4">3. How We Protect Your Information</h2>
        <p>We implement various security measures to safeguard your information:</p>
        <ul>
            <li>Using secure servers and encryption to protect sensitive data.</li>
            <li>Restricting access to your information to authorized personnel only.</li>
            <li>Regularly updating our security practices to address new threats.</li>
        </ul>

        <h2 class="text-warning mt-4">4. Sharing Your Information</h2>
        <p>We do not sell, trade, or otherwise transfer your personal information to outside parties, except in the following circumstances:</p>
        <ul>
            <li><strong>With Service Providers:</strong> Who assist us in operating our website and conducting business, under confidentiality agreements.</li>
            <li><strong>Legal Requirements:</strong> When required by law or to protect the rights, property, or safety of our company or others.</li>
        </ul>

        <h2 class="text-warning mt-4">5. Your Choices</h2>
        <p>You have the following rights regarding your personal information:</p>
        <ul>
            <li>Access and update your information.</li>
            <li>Opt-out of receiving promotional communications.</li>
            <li>Request the deletion of your personal data, subject to legal requirements.</li>
        </ul>

        <h2 class="text-warning mt-4">6. Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date.</p>

        <h2 class="text-warning mt-4">7. Contact Us</h2>
        <p>If you have any questions or concerns about this Privacy Policy, please contact us at <a href="mailto:contact@smartersrecipes.com ">contact@smartersrecipes.com</a> or call us at +447832409166 .</p>

        <p class="mt-4">Thank you for trusting Moroccan Essence with your personal information. We are committed to maintaining your privacy and security.</p>
    </div>

    <!-- footer section -->
    @include('footer')
    <!-- footer section -->
@endsection