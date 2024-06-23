@extends('layouts.guest')

@section('content')
<!-- Header -->
<header id="home">
    <div class="container-fluid d-flex align-items-center justify-content-center  bg-site-image">
        <div class=" text-center col-lg-6">
            <h1 class="  mb-5 header-title">
                HELLO, YOU ARE IN THE RIGHT PLACE <br>
               
            </h1>
            <p class=" mb-5  header-description">
                If you expect your software to be worked with hand in hand with your best idea
            </p>
            <div class="d-flex justify-content-center">
                <a href="/login" class="btn btn-bg-light btn-lg  px-4 py-2 me-3">
                    <i class=""></i>
                    Log In
                </a>
                <a href="/register" class="btn btn-bg-dark border btn-lg   px-4 py-2">
                    <i class=""></i>
                    Register
                </a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
<!-- Cards -->
<section  id="cards" class=" my-lg-2 ">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5 mb-0">
        <h2 class="">Cards
        </h2>
        <a href="#" class="btn btn-bg-light  px-4 py-2 me-3">
            <i class="fa-solid fa-book-open"></i>
            Explore All
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod, lorem ut ultrices facilisis, dolor tortor vulputate justo, a tristique nunc justo id justo.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">Nullam tincidunt euismod sapien, vel bibendum ipsum gravida ac.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
</section>

<!-- End About Them -->
<!-- Gallery -->
<section id="gallery" class=" my-lg-2">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class=" text-center text-lg-start">Gallery</h2>
        <a href="#" class="btn btn-bg-light  px-4 py-2 me-3">
            <i class="fa-regular fa-images"></i>
            Explore All
        </a>
    </div>
    <div class="container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- End Gallery -->
<!-- Contact Them -->
<section id="contact" class=" my-0 py-0  ">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class=" text-center text-lg-start">Contact Them</h2>
        <a href="#" class="btn btn-bg-light  px-4 py-2 me-3">
            <i class="fa-regular fa-images"></i>
            Explore All
        </a>
    </div>
    <div class=" container contact-info">
      <div>
        <h3 style="">Vizitați una dintre locații în Cahul, sau contactați</h3>
            <p style="">
            <span class="address">Sediul central:</span><br>
            <span class="address">Cahul
                B.P. Hașdeu Street 2
                Rep. Moldova</span><br>
            <span class="address">emailllllll</span><br>
            <span class="phone"><i class="fas fa-phone"></i> Telefon: +40 747 191 825</span>
            </p>
      </div>
      <div class="contact-info-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44418.667113810436!2d28.161734698222237!3d45.907976947400975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65c95ca29ef7d%3A0x254c4e01d94d6250!2sCahul%2C%20Moldova!5e0!3m2!1sro!2s!4v1719058550633!5m2!1sro!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>

    <div class=" container form">
        <div>
            <form action="" method="post" class="contact-form">
                @csrf
                <h3 style="">Scrieți un mesaj</h3>
                <label for="name">Numele dumneavoastră</label>
                <input type="text" id="name" name="name" required>
          
                <label for="email">Adresa de e-mail</label>
                <input type="email" id="email" name="email" required>
          
                <label for="subject">Subiect</label>
                <input type="text" id="subject" name="subject" required>
          
                <label for="message">Mesajul dumneavoastră</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit" class="btn btn-bg-light text-white px-4 py-2 me-3">
                    <i class=""></i> Submit
                </button>
                <a  href="/contacts" class="btn btn-bg-light text-white px-4 py-2 me-3">
                    <i class=""></i> See the messages
                </a>
            </form>
        </div>
        <div class="contact-form-image">
            <img src="{{ asset('assets/images/contact/contact1.png') }}" alt="Imagine de contact">
        </div>
        
    </div>
    

    
  </section>
<!-- End Contact Us -->
@endsection