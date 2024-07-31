@extends('layout')

@section('content')
    <div class="hero_area">
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
        <!-- slider section -->
        <section class="slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider_item-box">
                <div class="slider_item-container">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="slider_item-detail">
                            <div>
                            <h1>
                                Welcome to <br />
                                Moroccan food
                            </h1>
                            <p>
                                Immerse Yourself in the Rich Tapestry of Moroccan Flavors with Detailed Recipes, Cooking Tips, and Culinary Traditions
                            </p>
                            <div class="d-flex">
                                <a href="#books" class="text-uppercase custom_orange-btn mr-3">
                                Shop Now
                                </a>
                                <a href="#contact" class="text-uppercase custom_dark-btn">
                                Contact Us
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="slider_img-box">
                            <div>
                            <img src="images/slide-img.png" alt="" class="" />
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider_item-box">
                <div class="slider_item-container">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="slider_item-detail">
                            <div>
                                <h1>
                                    Welcome to <br />
                                    Moroccan food
                                </h1>
                                <p>
                                    Immerse Yourself in the Rich Tapestry of Moroccan Flavors with Detailed Recipes, Cooking Tips, and Culinary Traditions
                                </p>
                            <div class="d-flex">
                                <a href="" class="text-uppercase custom_orange-btn mr-3">
                                Shop Now
                                </a>
                                <a href="" class="text-uppercase custom_dark-btn">
                                Contact Us
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="slider_img-box">
                            <div >
                                <img src="images/slide-img.png" alt="" class="" />
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider_item-box">
                <div class="slider_item-container">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="slider_item-detail">
                            <div>
                            <h1>
                                Welcome to <br />
                                Our Fruits Shop
                            </h1>
                            <p>
                                There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or
                                randomised words which don't look even slightly
                                believable.
                            </p>
                            <div class="d-flex">
                                <a href="" class="text-uppercase custom_orange-btn mr-3">
                                Shop Now
                                </a>
                                <a href="" class="text-uppercase custom_dark-btn">
                                Contact Us
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="slider_img-box">
                            <div>
                            <img src="images/slide-img.png" alt="" class="" />
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
           
        </div>
        </section>

        <!-- end slider section -->
    </div>

    <!-- service section -->

    <section class="service_section layout_padding " id="services">
        <div class="container">
            <h2 class="custom_heading">Our Services</h2>
            <p class="custom_heading-text">
                <div class="service">
                    <h3 class="text-center"><span class="service-icon">🌟</span> Authentic Recipes</h3>
                    <p>Immerse yourself in a treasure trove of traditional Moroccan recipes. From the aromatic <strong>Tagines</strong> and fluffy <strong>Couscous</strong> to indulgent <strong>Pastries</strong> and soothing <strong>Soups</strong>, each recipe is crafted to deliver an authentic Moroccan experience right to your table.</p>
                </div>
    
                <div class="service">
                    <h3 class="text-center" ><span class="service-icon">📜</span> Step-by-Step Guides</h3>
                    <p>Our meticulously detailed guides make Moroccan cooking accessible to everyone. Whether you’re a kitchen novice or a seasoned chef, our step-by-step instructions ensure your dishes turn out exquisitely every time.</p>
                </div>
    
                <div class="service">
                    <h3 class="text-center"><span class="service-icon">🌿</span> Ingredient Insights</h3>
                    <p>Discover the essential spices, herbs, and ingredients that make Moroccan cuisine truly unique. Our insightful guides help you find these treasures and use them to create mouthwatering dishes.</p>
                </div>
    
                <div class="service">
                    <h3 class="text-center"><span class="service-icon">📖</span> Culinary Stories</h3>
                    <p>Dive deep into the rich history and cultural significance of Moroccan dishes. Our engaging articles and blog posts offer fascinating stories and traditions that bring each recipe to life.</p>
                </div>
    
                <div class="service">
                    <h3 class="text-center" ><span class="service-icon">🍽</span> Custom Meal Plans</h3>
                    <p>Plan your Moroccan culinary journey with ease using our personalized meal plans. Whether it’s for a special occasion or a week of delightful meals, we provide tailored recommendations to suit your tastes.</p>
                </div>
    
                <div class=" service">
                    <h3 class="text-center"><span class="service-icon">👩‍🍳</span> Interactive Community</h3>
                    <p>Connect with fellow Moroccan food enthusiasts in our vibrant community. Share your culinary creations, seek advice, and engage with others who share your passion for Moroccan flavors.</p>
                </div>
            </p
        </div>
    </section>

    <!-- end service section -->

    <!-- fruits section -->

    <section class="fruit_section" id="books">
        <div class="container">
        <h2 class="custom_heading text-danger">books</h2>
        <div class="row layout_padding2">
            <div class="col-md-8">
            <div class="fruit_detail-box">
                <h3>
                Flavors Of Morocco
                </h3>
                <p class="mt-4 mb-5">
                    <div class="row">
                        <!-- Tagine -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Tagine</h4>
                            <p>Classic Moroccan stew with tender meat, vegetables, and spices, slow-cooked in a traditional earthenware pot.</p>
                        </div>
            
                        <!-- Tanjia -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Tanjia</h4>
                            <p>Maroccan lamb dish slow-cooked with preserved lemons and olives, known for its rich, tangy flavor.</p>
                        </div>
            
                        <!-- Meat with Plums -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Meat with Plums</h4>
                            <p>Tender meat cooked with sweet plums, blending savory and sweet flavors in a Moroccan favorite.</p>
                        </div>
            
                        <!-- Rfisa -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Rfisa</h4>
                            <p>Shredded flatbread with a spiced chicken and lentil stew, offering a hearty Moroccan meal.</p>
                        </div>
            
                        <!-- Couscous -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Couscous</h4>
                            <p>Fluffy steamed wheat granules served with a rich stew, a versatile staple of Moroccan cuisine.</p>
                        </div>
                    </div>
            
                </p>
                <div>
                <a href="/details/1" class="custom_dark-btn">
                    Buy Now
                </a>
                </div>
            </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="fruit_img-box d-flex justify-content-center align-items-center">
                <img src="images/orange.png" alt="" class="" width="300px" />
            </div>
            </div>
        </div>
        <div class="row layout_padding2">
            <div class="col-md-8">
            <div class="fruit_detail-box">
                <h3>
                Sweet Delights Of Morocco
                </h3>
                <p class="mt-4 mb-5">
                    <div class="row">
                        <!-- Chebakia -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Chebakia</h4>
                            <p>Delicate, honey-coated pastries with a hint of sesame and anise, shaped into intricate patterns.</p>
                        </div>
            
                        <!-- Ghriba -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Ghriba</h4>
                            <p>Crunchy, round cookies with a slightly crumbly texture, often flavored with almonds or coconut.</p>
                        </div>
            
                        <!-- Mhancha -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Mhancha</h4>
                            <p>Elegant, snake-shaped pastries filled with a blend of almonds and spices, then baked to golden perfection.</p>
                        </div>
            
                        <!-- Beghrir -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Beghrir</h4>
                            <p>Soft, spongy pancakes with a honeycomb texture, perfect for soaking up honey or syrup.</p>
                        </div>
                    </div>
                </p>
                <div>
                <a href="/details/2" class="custom_dark-btn">
                    Buy Now
                </a>
                </div>
            </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="fruit_img-box d-flex justify-content-center ">
                <img src="images/grapes.png" alt="" class="" width="300px" />
            </div>
            </div>
        </div>
        <div class="row layout_padding2-top layout_padding-bottom">
            <div class="col-md-8">
            <div class="fruit_detail-box">
                <h3>
                    Soups Of Morocco
                </h3>
                <p class="mt-4 mb-5">
                    <div class="row">
                        <!-- Harira -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Harira</h4>
                            <p>A rich and hearty soup made with tomatoes, lentils, chickpeas, and a blend of spices, traditionally enjoyed during Ramadan.</p>
                        </div>
            
                        <!-- Bissara -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Bissara</h4>
                            <p>Thick and creamy fava bean soup, seasoned with garlic, cumin, and olive oil, offering a comforting and nutritious meal.</p>
                        </div>
            
                        <!-- Chorba -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Chorba</h4>
                            <p>Hearty soup made with meat and vegetables, flavored with aromatic herbs and spices, ideal for warming up on a chilly day.</p>
                        </div>
            
                        <!-- Loubia -->
                        <div class="col-md-6 mb-3">
                            <h4 class="text-warning">Loubia</h4>
                            <p>Spicy bean stew featuring tender white beans simmered with tomatoes, garlic, and cumin, a favorite comfort food in Morocco.</p>
                        </div>
                    </div>
                </p>
                <div>
                <a href="details/3" class="custom_dark-btn">
                    Buy Now
                </a>
                </div>
            </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="fruit_img-box d-flex justify-content-center align-items-center">
                <img src="images/gauva.png" alt="" class="" width="300px" />
            </div>
            </div>
        </div>
        <div class="row layout_padding2-top layout_padding-bottom">
            <div class="col-md-8">
            <div class="fruit_detail-box">
                <h3>
                Moroccan Cakes & Pastries
                </h3>
                <p class="mt-4 mb-5">
                    <div class="container">
                        <div class="row">
                            <!-- Meskouta -->
                            <div class="col-md-6 mb-3">
                                <h4 class="text-warning">Meskouta</h4>
                                <p>Moist and fluffy Moroccan orange cake, flavored with citrus and often enjoyed with tea.</p>
                            </div>
                
                            <!-- Kaab el Ghazal -->
                            <div class="col-md-6 mb-3">
                                <h4 class="text-warning">Kaab el Ghazal</h4>
                                <p>Delicate almond-filled pastries shaped like gazelle's hooves, often spiced with cinnamon and sugar.</p>
                            </div>
                
                            <!-- Baklava -->
                            <div class="col-md-6 mb-3">
                                <h4 class="text-warning">Baklava</h4>
                                <p>Rich and sweet pastry made of layers of filo dough filled with nuts and honey, a beloved treat in Moroccan cuisine.</p>
                            </div>
                
                            <!-- Fekkas -->
                            <div class="col-md-6 mb-3">
                                <h4 class="text-warning">Fekkas</h4>
                                <p>Crispy, twice-baked cookies with a variety of ingredients like nuts, raisins, and seeds, perfect for snacking.</p>
                            </div>
                        </div>
                    </div>
                </p>
                <div>
                <a href="/details/4" class="custom_dark-btn">
                    Buy Now
                </a>
                </div>
            </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="fruit_img-box d-flex justify-content-center align-items-center">
                <img src="images/fekkas.png" alt="" class="" width="300px" />
            </div>
            </div>
        </div>
        </div>
    </section>

    

    <!-- tasty section -->
    <section class="tasty_section">
        <div class="container_fluid">
       
        </div>
    </section>

    <!-- end tasty section -->

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contact">
        <div class="container">
        <h2 class="font-weight-bold">
            Contact Us
        </h2>
        <div class="row">
            <div class="col-md-8 mr-auto">
            <form action="">
                <div class="contact_form-container">
                <div>
                    <div>
                    <input type="text" placeholder="Name">
                    </div>
                    <div>
                    <input type="text" placeholder="Phone Number">
                    </div>
                    <div>
                    <input type="email" placeholder="Email">
                    </div>

                    <div class="mt-5">
                    <input type="text" placeholder="Message">
                    </div>
                    <div class="mt-5">
                    <button type="submit">
                        send
                    </button>
                    </div>
                </div>

                </div>

            </form>
            </div>
        </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- footer section -->
    @include('footer')
    <!-- footer section -->
@endsection