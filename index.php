<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripizo - HOME</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
            .availability-form{
              margin-top: -50px;
              z-index: 2;
              position: relative;
            }


            @media screen and (max-width: 575px) {
                .availability-form{
                margin-top: 25px;
                padding: 0 35px;
              }
            }        
    </style>
</head>
<body>
<?php require('inc/header.php'); ?>


<!-- carousel -->

<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block">
      </div>
      
    </div>
  </div>
</div>


<!-- check availability -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4"> Check Booking Availability</h5>
      <form action="">
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
             
               <label class="form-label" style="font-weight: 500;">Location</label>
               <input type="text" class="form-control shadow-none" required>
                    
          </div>          
          <div class="col-lg-3 mb-3">
             
               <label class="form-label" style="font-weight: 500;">Check-in</label>
               <input type="date" class="form-control shadow-none">
                    
          </div>
          <div class="col-lg-3 mb-3">
             
               <label class="form-label" style="font-weight: 500;">Check-out</label>
               <input type="date" class="form-control shadow-none">
                    
          </div>
          <div class="col-lg-3 mb-3">
                           <label class="form-label" style="font-weight: 500;">Person</label>
                           <select class="form-select shadow-none" >
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>

          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- our rooms -->

<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="images/rooms/1.jpg" class="card-img-top" >

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">NRP:500 per night</h6>
    <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcoiny
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
            </span>
    </div>
    <div class="facilities mb-4">
      <h6 class="mb-1">Facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telivision
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Teliphone
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
            </span>
    </div>
    <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>

    </div>
    <div class="d-flex justify-content-evenly mb-2">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

    </div>
  </div>
  </div>
</div>
  <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="images/rooms/2.jpg" class="card-img-top" >

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">NRP:500 per night</h6>
    <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcoiny
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
            </span>
    </div>
    <div class="facilities mb-4">
      <h6 class="mb-1">Facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telivision
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Teliphone
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
            </span>
    </div>
    <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>

    </div>
    <div class="d-flex justify-content-evenly mb-2">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

    </div>
  </div>
  </div>
</div>
  <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
  <img src="images/rooms/3.jpg" class="card-img-top" >

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">NRP:500 per night</h6>
    <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcoiny
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
            </span>
    </div>
    <div class="facilities mb-4">
      <h6 class="mb-1">Facilities</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telivision
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Teliphone
            </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room heater
            </span>
    </div>
    <div class="rating mb-4">
        <h6 class="mb-1">Rating</h6>
        <span class="badge rounded-pill bg-light">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        </span>

    </div>
    <div class="d-flex justify-content-evenly mb-2">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

    </div>
  </div>
  </div>
</div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>></a>

    </div>
  </div>
</div>


<!-- Facilities -->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR Facilities</h2>

<div class="container">
  <div class="row justify-content-evenly gx-4 px-lg-0 px-md-0 px-10">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>></a>

    </div>
</div>

<!-- testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<p class="text-center mt-3">What our guests say about us</p>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
      <div class="swiper swiper-testinomials">
        <div class="swiper-wrapper">

          <div class="swiper-slide bg-white p-4 rounded shadow-sm">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/features/star.svg" width="30px" alt="" class="rounded-circle">
              <div class="ms-3">
                <h6 class="m-0 fw-bold">John Smith</h6>
                <small class="text-muted">Business Traveler</small>
              </div>
            </div>
            <p class="mb-3 text-muted">
              "Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis aut dolorem sed id eos aspernatur doloribus 
              voluptates, consequuntur repellat voluptatum."
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>            
            </div>
          </div>

          <div class="swiper-slide bg-white p-4 rounded shadow-sm">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/features/star.svg" width="30px" alt="" class="rounded-circle">
              <div class="ms-3">
                <h6 class="m-0 fw-bold">Sarah Johnson</h6>
                <small class="text-muted">Family Vacation</small>
              </div>
            </div>
            <p class="mb-3 text-muted">
              "Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis aut dolorem sed id eos aspernatur doloribus 
              voluptates, consequuntur repellat voluptatum."
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>            
            </div>
          </div>

          <div class="swiper-slide bg-white p-4 rounded shadow-sm">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/features/star.svg" width="30px" alt="" class="rounded-circle">
              <div class="ms-3">
                <h6 class="m-0 fw-bold">Mike Davis</h6>
                <small class="text-muted">Couple Getaway</small>
              </div>
            </div>
            <p class="mb-3 text-muted">
              "Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis aut dolorem sed id eos aspernatur doloribus 
              voluptates, consequuntur repellat voluptatum."
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>            
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >></a>

    </div>
</div>


<!-- Reach Us -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

 <div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.5178180741636!2d84.43429827529934!3d27.670386276203754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fad518c247f1%3A0x5c1f28d7970cbd91!2sChitwan%20MidTown%20(CMT)%20Hotel!5e0!3m2!1sen!2snp!4v1756444531054!5m2!1sen!2snp"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +9843124301" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +9843124301
          </a>
          <br>
          <a href="tel: +9843124301" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +9843124301
          </a>
        </div>
                <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter-x ne-1"></i> Twitter X
            </span>
          </a>
          <br>
           <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook ne-1"></i> Facebook
            </span>
          </a>
          <br>
           <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram ne-1"></i> Instagram
            </span>
          </a>

        </div>
    </div>
  </div>
 </div>




<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay: 3500,
        disableOnInteraction: false,
      }
  
      
    });

        var swiper = new Swiper(".swiper-testinomials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      }
      //       autoplay:{
      //   delay: 3500,
      //   disableOnInteraction: false,
      // }
    });
  </script>
</body>
</html>