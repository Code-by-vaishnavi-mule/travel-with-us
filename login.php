<?php
require'config.php';
if(isset($_POST["submit"])){
  $usernameemail=$_POST["usernameemail"];
  $password=$_POST["password"];
  $result=mysqli_query($con1,"SELECT * FROM tb_user WHERE username = '$usernameemail' OR email='$usernameemail'");
  $row=mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
    if($password==$row["password"]){
        $_SESSION["login"]=true;
        $_SESSION["id"]=$row["id"];
        header("Location: index.html");
    }
    else{
      echo 
      "<script> alert('Wrong password');</script>";
    }
  }
  else{
    echo 
    "<script> alert('User Not Registered');</script>";
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
        <a href="login.php"class="btn text-white" type="submit">Login</a> &nbsp;
          <a href="register.php"class="btn pill-btn btn-outline-light" type="submit">
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
          style="position: relative; top:30vh;"
        >
          <div class="col-10 col-md-8 col-lg-5" style="box-shadow: 0px 0px 5px gray;border-radius: 10px;background-color: rgba(0, 0, 0, 0.452);">
            <form action="login.php" method="post">
              <div class="row mt-4">
                  <h3 class="text-center">Login</h3>
                <div class="col-12">
                  
                  <label for="exampleFormControlInput1" class="form-label"
                    >Username or Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    name="usernameemail"
                    id="usernameemail"
                    required value=""
                    placeholder="name@example.com"
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword5" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control" 
                    required value=""
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                
              </div>
              
                <button
                  type="submit"
                  class="btn btn-outline-info mt-2 mb-2"
                  value="Login"
                  name="submit"
                >Login</button>
             
            </form>
            <div class="text-center"> Don't have an Account?- <a href="register.php" class="text-info">Register</a></div>
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
