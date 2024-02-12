<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <title>mhf hotel - Home</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <?php require('inc/links.php') ?>
    <style>
      .availabality-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width: 575px) {
        .availabality-form {
          margin-top: 25px;
          padding: 0px 35px;
        }
      }
    </style>
  </head>
  <body class="bg-light">

    <?php require('inc/header.php') ?>

    <!--carousel-->
    <div class="container-fluid px-lg-4 mt-4">
      <!-- Swiper -->
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/2.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/3.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/4.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/5.png" class="w-100 d-block" />
          </div>
        </div>
      </div>
    </div>

    <!--check availabality form-->
    <div class="container availabality-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow rounded p-4">
          <h5 class="mb-5">Check Bocking Availabality</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check In</label
                >
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check Out</label
                >
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500">Adult</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Children</label
                >
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button
                  type="submit"
                  class="btn shadow-none text-white custom-bg"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--Our Rooms-->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/rooms/1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Villa Kirana</h5>
              <h6 class="mb-4">rp. 200.000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Sofa
                </span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Ac
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Room Heater
                </span>
              </div>
              <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >5 Adult
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >4 Children
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/rooms/1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Villa Kirana</h5>
              <h6 class="mb-4">rp. 200.000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Sofa
                </span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Ac
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Room Heater
                </span>
              </div>
              <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >5 Adult
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >4 Children
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/rooms/1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>Villa Kirana</h5>
              <h6 class="mb-4">rp. 200.000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >3 Sofa
                </span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Ac
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >Room Heater
                </span>
              </div>
              <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >5 Adult
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >4 Children
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap"
                  >
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
          >
            More Rooms</a
          >
        </div>
      </div>
    </div>

    <!---Our Facilities-->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/facilities/IMG_41622.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/facilities/IMG_41622.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/facilities/IMG_41622.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/facilities/IMG_41622.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"
        >
          <img src="images/facilities/IMG_41622.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>

        <div class="col-lg-12 text-center mt-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
          >
            More Facilities >>></a
          >
        </div>
      </div>
    </div>
    <!---Testimonials-->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container mt-5">
      <!-- Swiper -->
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/IMG_41622.svg" width="30px" />
              <h6 class="m-0 ms-2">random user1</h6>
            </div>
            <p>fsdklfsdlkf fsdfsdfsdfsdf fsdfdsfsdfsdfsd fsdfdsfsdfsfsdf</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/IMG_41622.svg" width="30px" />
              <h6 class="m-0 ms-2">random user1</h6>
            </div>
            <p>fsdklfsdlkf fsdfsdfsdfsdf fsdfdsfsdfsdfsd fsdfdsfsdfsfsdf</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/IMG_41622.svg" width="30px" />
              <h6 class="m-0 ms-2">random user1</h6>
            </div>
            <p>fsdklfsdlkf fsdfsdfsdfsdf fsdfdsfsdfsdfsd fsdfdsfsdfsfsdf</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a
          href="#"
          class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
        >
          Know More >>></a
        >
      </div>
    </div>

    <!---Reach Us-->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe
            class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7924.655850700838!2d108.54627410004171!3d-6.72978574857375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d885a104a8f%3A0xebe1b4e7142b0025!2sKesambi%2C%20Kec.%20Kesambi%2C%20Kota%20Cirebon%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1706000246016!5m2!1sid!2sid"
            height="320px"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded">
            <h5>call us</h5>
            <a
              href="+62 89603769786"
              class="d-inline-block mb-2 text-decoration-none text-dark"
              ><i class="bi bi-telephone-fill"></i> +62 89603769786</a
            >
            <br />
            <a
              href="+62 89603769786"
              class="d-inline-block mb-2 text-decoration-none text-dark"
              ><i class="bi bi-telephone-fill"></i> +62 89603769786</a
            >
          </div>
          <div class="bg-white p-4 rounded">
            <h5>Follow us</h5>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2"
                ><i class="bi bi-twitter me-1"></i>Twitter</span
              >
            </a>
            <br />
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2"
                ><i class="bi bi-facebook me-1"></i>Facebook</span
              >
            </a>
            <br />
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2"
                ><i class="bi bi-instagram me-1"></i>Instagram</span
              >
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        slidesPerView: "3",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: { slidesPerView: 1 },
          640: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        },
      });
    </script>
  </body>
</html>
