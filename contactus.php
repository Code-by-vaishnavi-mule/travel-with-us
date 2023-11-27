
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <script defer src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="min-height: 100vh;">
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
    <div class="container-fluid" style="position: relative; top: 2rem;min-height:93vh;">
      <h1
          class="col-12 gradient_heading_4 pt-4 text-center"
        >
        <i class="bi bi-headset"></i>
          Contact us
        </h1>
      <div
        class="row mt-5 d-flex justify-content-center"
        style="position: relative; top: 2rem"
      >

        <div class="col-lg-8 col-12">
        <?php
            $msg="";
            if(isset($_GET['error']))
            {
              $msg="Please fill in the blanks";
              echo '<div class="alert alert-danger">'.$msg.'</div>';
            }
            if(isset($_GET['success'])){
              $msg="Your Message Has Been Sent";
              echo '<div class="alert alert-success">'.$msg.'</div>';
            }
      ?>
          <form class="row" action="process.php" method ="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Name</label
              >
              <input
                type="text"
                class="form-control"
                name="name"
                id="exampleFormControlInput1"
                placeholder="John Sadler"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput2" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput2"
                name="email"
                placeholder="name@example.com"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput3" class="form-label"
                >Subject</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput3"
                name="subject"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Description</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                name="description"
                rows="3"
              ></textarea>
            </div>
            <center>
              <input
                type="submit"
                class="btn btn-outline-light"
                value="Submit"
                name="btnsend"
              />
            </center>
          </form>
        </div>
      </div>
    </div>
    <footer
      class="row m-1 text-white text-center"
      style="
        overflow-x: hidden;
        margin: 0;
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
  </body>
</html>
