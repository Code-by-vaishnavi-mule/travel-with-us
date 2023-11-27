<?php 
require 'config.php';
        if (isset($_POST["submit"])) {
           $name = $_POST["name"];
           $username=$_POST["username"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $confirmpassword = $_POST["confirmpassword"];
           $duplicate=mysqli_query($con1,"SELECT * FROM tb_user WHERE username = '$username' OR email = '$email' ");
           if(mysqli_num_rows($duplicate)>0){
            echo 
            "<script> alert('Username or Email Has Already Taken');</script>";
           }
           else{
            if($password==$confirmpassword){
              $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
              mysqli_query($con1,$query);
              echo 
              "<script> alert('Registration Successful');</script>";
            }
            else{
              echo 
              "<script> alert('Password does not match');</script>";
            }
           }

          }   
        ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
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
            <a class="nav-link fw-semibold text-white" href="/aboutus.html"
              >About us</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="/contactus.html"
              >Contact us</a
            >
          </li>
        </ul>
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
              <a class="nav-link fw-semibold text-white" href="/aboutus.html"
                >About us</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="/contactus.html"
                >Contact us</a
              >
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
    <div class="container-fluid main_container" id="container_main">
      <div class="landing_page_background">
        
        <div
          class="row d-flex justify-content-center"
          style="position: relative; top: 5rem;"
        >
          <div class="col-10 col-md-8 col-lg-6" style="box-shadow: 0px 0px 5px gray;border-radius: 10px;background-color: rgba(0, 0, 0, 0.452);">
            
            <form action="register.php" method="post" >
              <div class="row mt-4">
                <div class="col-12">
                  <h3 class="text-center">Register</h3>
                  <label for="exampleFormControlInput1" class="form-label"
                    >Name</label
                  >
                  <input
                    class="form-control"
                    type="text"
                    id="name"
                    placeholder="John Sadler"
                    aria-label="default input example"
                    name="name"
                  />
                </div>
                <div class="col-12">
                  <label for="username" class="form-label"
                    >Username</label
                  >
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="John_Sadler"
                    aria-label="default input example"
                  />
                <div class="col-12">
                  <label for="exampleFormControlInput1" class="form-label" 
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="name@example.com"
                    name="email"
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword5" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                    name="password"
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword6" class="form-label"
                    >Confirm Password</label
                  >
                  <input
                    type="password"
                    id="confirmpassword"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                    name="confirmpassword"
                  />
                  <div id="passwordHelpBlock" class="form-text text-white">
                    Your password must be 8-20 characters long,
                  </div>
                  
                </div>
              </div>
                  <button
                  type="submit"
                  class="btn btn-outline-info mt-2 mb-2"
                  value="Register"
                  name="submit"
                >Register</button>
               
            </form>
            <div class="text-center"> Already have an Account?- <a href="login.php" class="text-info">Login</a></div>
          </div>
        </div>
      </div>
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
  </body>
</html>
