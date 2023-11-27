<?php 
  require 'config.php';
  if(!empty($_SESSION["id"])){
    $id= $_SESSION["id"];
    $result=mysqli_query($con1,"SELECT * FROM tb_user WHERE id = $id");
    $row=mysqli_fetch_assoc($result);
  }
  else{
    header("Location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travle Planner</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <script defer src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <div
      class="offcanvas offcanvas-end text-bg-dark"
      tabindex="-1"
      id="offcanvasRight"
      aria-labelledby="offcanvasRightLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
        <button
          style="background-color: white"
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link fw-semibold gradient_heading_1"
              aria-current="page"
              href="index.html"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="plans.html"
              >Pricing & Plans</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="/aboutus.html">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="/contactus.html">Contact us</a>
          </li>
        </ul>
        <a href="login.html"class="btn text-white" type="submit">Login</a> &nbsp;
        <a href="register.html"class="btn pill-btn btn-outline-light" type="submit">
          Register
        </a>
      </div>
    </div>
    <!-- navigation bar Starts Here  -->
    <nav
      style="position: absolute; width: 100%"
      class="navbar navbar-expand-lg nav_background_color"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">Travel With US</a>
        <button
          class="btn-outline-light navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight"
        >
          <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link fw-semibold gradient_heading_1"
                aria-current="page"
                href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="plans.html"
                >Pricing & Plans</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="/aboutus.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="/contactus.html">Contact us</a>
            </li>
          </ul>
          <!-- <form class="d-flex" role="search"> -->
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
           <a href="login.php"class="btn" type="submit">Login</a> &nbsp;
          <a href="register.php"class="btn pill-btn btn-outline-light" type="submit">
            Register
          </a>
          <!-- </form> -->
        </div>
      </div>
    </nav>
    <!-- navigation bar ends Here  -->
    <!-- main Container Starts Here  -->
    <div class="container-fluid main_container">
      <div class="landing_page_background">
        <div class="">
          <div class="ms-md-4 Landing_Page_Heading">
            <span
              class="gradient_heading_1"
              data-aos="fade-in"
              data-aos-delay="50"
              data-aos-easing="ease-in"
              data-aos-duration="1000"
              >Discover Your</span
            >

            <br />
            <h1
              data-aos="fade-up"
              data-aos-delay="50"
              data-aos-easing="ease-in"
              data-aos-duration="800"
            >
              Adventure
            </h1>
            <div class="row">
              <h2 class="col-md-auto gradient_heading_1">
                Explore The World with Ease.
              </h2>
              <h2 class="col-md-auto">
                <a
                  href="#destinations_toExplore"
                  class="slide gradient_heading_1"
                  >Explore
                  <i class="bi bi-arrow-right-circle"></i>
                </a>
              </h2>
            </div>
          </div>
        </div>
      </div>
      <!-- What we offer  -->
      <div class="row m-2 d-flex justify-content-evenly">
        <h1
          class="col-12 gradient_heading_1 mt-5 mb-5 text-center"
          data-aos="fade-up"
          data-aos-delay="50"
          data-aos-easing="ease-in"
          data-aos-duration="800"
        >
          <i class="bi bi-stars"></i>
          What We Offer
          <i class="bi bi-stars"></i>
        </h1>
        <div
          class="mt-3 mb-3 what_we_offer_card card_1 col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="50"
          data-aos-easing="ease-in"
          data-aos-duration="500"
        >
          <h2><i class="bi bi-gear"></i>&nbsp; Trip Planning Tools</h2>
          <p>Plan Your Trip With Ease using out predesigned Tools</p>
        </div>
        <div
          class="mt-3 mb-3 what_we_offer_card card_2 col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="100"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <h2>
            <i class="bi bi-check2-circle"></i>&nbsp; Transportation Options
          </h2>
          <p>
            Integration with transportation services for flight, train, and bus
            bookings.
          </p>
        </div>
        <div
          class="mt-3 mb-3 what_we_offer_card card_3 col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <h2><i class="bi bi-coin"></i>&nbsp; Budget Management</h2>
          <p>Customize Plan According To Your Budget</p>
        </div>
        <div
          class="mt-3 mb-3 what_we_offer_card card_4 col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="200"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <h2><i class="bi bi-share"></i> &nbsp; Collaborative Planning</h2>
          <p>
            Allow users to invite friends or family to collaborate on trip
            planning.
          </p>
        </div>
        <div
          class="mt-3 mb-3 what_we_offer_card card_5 col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="250"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <h2>
            <i class="bi bi-currency-exchange"></i>&nbsp; Language and Currency
            Conversion
          </h2>
          <p>Support for multiple languages and currency conversion</p>
        </div>
        <div
          class="mt-3 mb-3 what_we_offer_card card_6 col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="300"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <h2><i class="bi bi-headset"></i>&nbsp; Customer Support</h2>
          <p>
            Live chat or customer support feature for users who need assistance
          </p>
        </div>
      </div>
      <!-- Destinations and Plans  -->
      <div
        class="row m-2 d-flex justify-content-evenly"
        style="overflow-x: hidden"
      >
        <h1
          class="col-12 gradient_heading_2 mt-5 mb-5 text-center"
          data-aos="fade-right"
          data-aos-delay="50"
          data-aos-easing="ease-in"
          data-aos-duration="800"
          id="destinations_toExplore"
        >
          <i class="bi bi-geo-alt"></i>
          Destinations / Plans
          <i class="bi bi-map"></i>
        </h1>
        <a
          href="location.html?Delhi"
          class="col-12 col-lg-5 Destinations_card"
          data-aos="fade-right"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <img
            src="https://c4.wallpaperflare.com/wallpaper/961/859/615/newdelhi-redfort-landmark-sky-wallpaper-preview.jpg"
            alt=" Background"
          />
          <div class="overlay">
            <h2>Delhi</h2>
            <p>including Red Fort,Delhi Gate and More..</p>
          </div>
        </a>

        <a
          href="location.html?Aagrah"
          class="col-12 col-lg-5 Destinations_card"
          data-aos="fade-left"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <img
            src="https://c4.wallpaperflare.com/wallpaper/249/678/415/unesco-world-heritage-site-asia-india-agra-wallpaper-preview.jpg"
            alt=" Background"
          />
          <div class="overlay">
            <h2>Agrah</h2>
            <p>including Taj Mahal and More..</p>
          </div>
        </a>

        <a
          href="location.html?Goa"
          class="col-12 col-lg-5 Destinations_card"
          data-aos="fade-right"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <img
            src="https://c4.wallpaperflare.com/wallpaper/404/633/114/5bd34ad9b11a2-wallpaper-preview.jpg"
            alt=" Background"
          />
          <div class="overlay">
            <h2>Goa</h2>
            <p>
              Goa is also known for its beaches, ranging from Baga and Palolem
            </p>
          </div>
        </a>

        <a
          href="location.html?Rishikesh"
          class="col-12 col-lg-5 Destinations_card"
          data-aos="fade-left"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <img
            src="https://t3.ftcdn.net/jpg/04/74/52/86/360_F_474528672_vpQtkeor5wF3bF8wkm7Fbt3BOhlEoBRh.jpg"
            alt=" Background"
          />
          <div class="overlay">
            <h2>Rishikesh</h2>
            <p>including Taj Mahal and More..</p>
          </div>
        </a>

        <a
          href="location.html?Darjeeling"
          class="col-12 col-lg-5 Destinations_card"
          data-aos="fade-right"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <img
            src="https://bongbackpackers.com/wp-content/uploads/2019/07/darjeeling-1.jpg"
            alt=" Background"
          />
          <div class="overlay">
            <h2>Darjeeling</h2>
            <p>including Red Fort,Delhi Gate and More..</p>
          </div>
        </a>

        <a
          href="location.html?Bali"
          class="col-12 col-lg-5 Destinations_card"
          data-aos="fade-left"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <img
            src="https://hblimg.mmtcdn.com/content/hubble/img/desttvimg/mmt/destination/m_Bali_tv_destination_img_5_l_753_1144.jpg"
            alt="Card Background"
          />
          <div class="overlay">
            <h2>Bali</h2>
            <p>including Taj Mahal and More..</p>
          </div>
        </a>
        <center>
          <a href="/plans.html" class="Explore_more_btn d-inline-block">
            Explore More
            <i class="bi bi-arrow-right-circle"></i>
          </a>
        </center>
      </div>
      <!-- international Plans  -->
      <div
        class="row m-1 d-flex justify-content-center"
        style="overflow-x: hidden"
      >
        <h1
          class="col-12 gradient_heading_3 mt-5 mb-5 text-center"
          data-aos="fade-right"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <i class="bi bi-geo-alt"></i>
          International Plans / Top Plans
          <i class="bi bi-map"></i>
        </h1>

        <button
          class="top_plans_btns col-1 align-self-center"
          id="showPreviousBtn"
          style="transform: rotate(180deg)"
        >
          <i class="bi bi-arrow-right-circle"></i>
        </button>
        <div
          class="col-lg-8 col-9 cards-container"
          id="cards-container"
          data-aos="fade-left"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <a href="#" class="col-10 col-lg-8 top_plan_card" style="z-index: 1">
            <img src="images/top_plans_Dubai.jpg" alt="Card Background" />
            <div class="overlay_top_plans">
              <h2>Dubai</h2>
              <p>Description 1</p>
            </div>
          </a>
          <a href="#" class="top_plan_card" style="z-index: 0">
            <img src="images/top_plans_japan.jpg" alt="Card Background" />
            <div class="overlay_top_plans">
              <h2>Japan</h2>
              <p>Description 2</p>
            </div>
          </a>
          <a href="#" class="top_plan_card" style="z-index: 0">
            <img src="images/top_plans_singapore.jpg" alt="Card Background" />
            <div class="overlay_top_plans">
              <h2>Singapore</h2>
              <p>Description 2</p>
            </div>
          </a>
          <a href="#" class="top_plan_card" style="z-index: 0">
            <img src="images/top_plans_Paris.jpg" alt="Card Background" />
            <div class="overlay_top_plans">
              <h2>Paris</h2>
              <p>Description 2</p>
            </div>
          </a>
          <a href="#" class="top_plan_card" style="z-index: 0">
            <img src="images/top_plans_egypt.jpg" alt="Card Background" />
            <div class="overlay_top_plans">
              <h2>Egypt</h2>
              <p>Description 2</p>
            </div>
          </a>
          <!-- Add more cards as needed -->
        </div>

        <!-- <div class="nav-buttons"> -->
        <button class="top_plans_btns col-1 align-self-center" id="showNextBtn">
          <i class="bi bi-arrow-right-circle"></i>
        </button>
        <!-- </div> -->
      </div>
      <center>
        <a href="/plans.html" class="Explore_more_btn d-inline-block">
          Explore More
          <i class="bi bi-arrow-right-circle"></i>
        </a>
      </center>
      <!-- Custom Plans  -->
      <div
        class="row m-2 d-flex justify-content-center"
        style="overflow-x: hidden; min-height: fit-content"
      >
        <h1
          class="col-12 gradient_heading_4 mt-5 mb-5 text-center"
          data-aos="fade-right"
          data-aos-delay="150"
          data-aos-easing="ease-in"
          data-aos-duration="1000"
        >
          <i class="bi bi-geo-alt"></i>
          Custom Plans
          <i class="bi bi-map"></i>
        </h1>
        <div
          class="col-10 col-lg-8mt-3 mb-3 what_we_offer_card card_1"
          class="col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="50"
          data-aos-easing="ease-in"
          data-aos-duration="500"
        >
          <h2><i class="bi bi-gear"></i>&nbsp;Custom Plan</h2>
          <p class="text-center">
            Choose Your Custom Locations and Make Your Adventure More Flexible
          </p>
        </div>

        <div
          class="col-12 col-lg-10 mt-3 mb-3 mb-3 custom_plan_form"
          class="col-md-5 col-10"
          data-aos="fade-up"
          data-aos-delay="50"
          data-aos-easing="ease-in"
          data-aos-duration="500"
        >
          <form action="">
            <div class="row m-1 text-dark">
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput1"
                    placeholder="Name Sirname"
                  />
                  <label for="floatingInput1">Full Name</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput2"
                    placeholder="name@example.com"
                  />
                  <label for="floatingInput2">Email address</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input
                    type="number"
                    class="form-control"
                    id="floatingInput3"
                    placeholder="7845545874"
                  />
                  <label for="floatingInput3">Contact Number</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-floating mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput4"
                    placeholder="Name Sirname"
                  />
                  <label for="floatingInput4">No Of Peoples</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating mb-3">
                  <input
                    type="number"
                    class="form-control"
                    id="floatingInput5"
                    placeholder="name@example.com"
                  />
                  <label for="floatingInput5">Days of Stay</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInput6"
                    placeholder="name@example.com"
                  />
                  <label for="floatingInput6">Budget</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInput7"
                    placeholder="Address"
                  />
                  <label for="floatingInput7">Locations</label>
                </div>
              </div>
              <div class="col-12">
                <label
                  for="exampleFormControlTextarea1"
                  class="form-label text-white"
                  >Plan Description</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
              <center>
                <button class="mt-3 mb-3 btn btn-outline-light">Submit</button>
              </center>
              <h5 class="text-center text-white">
                We Will Contact you as soon as possible
              </h5>
            </div>
          </form>
        </div>
      </div>
      <div
        class="row mt-5 m-2 text-center"
        style="background-color: rgb(58, 58, 58); padding: 1rem 0 0 0"
      >
        <div class="col-md-3 col-6">
          <h1 class="gradient_heading_1">120</h1>
          <p>Trips Planed</p>
        </div>
        <div class="col-md-3 col-6">
          <h1 class="gradient_heading_2">4340</h1>
          <p>Satisfied Customers</p>
        </div>
        <div class="col-md-3 col-6">
          <h1 class="gradient_heading_3">34</h1>
          <p>International Trips Planed</p>
        </div>
        <div class="col-md-3 col-6">
          <h1 class="gradient_heading_4">67</h1>
          <p>celebritie Customers</p>
        </div>
      </div>
      <!-- Main Container End Here  -->
    </div>
    <footer
      class="row m-1 text-white text-center"
      style="
        overflow-x: hidden;
        margin: 0;
        position: relative;
        left: 0;
        bottom: 0;
        width: 100%;
      "
    >
      <div
        class="col-12"
        style="background-color: rgb(39, 39, 39); padding: 10px; margin: 0"
      >
        &copy; 2023 - Travel With US
      </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="indexscript.js"></script>
  </body>
</html>
