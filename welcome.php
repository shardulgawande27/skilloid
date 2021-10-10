<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!-- <!doctype html>
<html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head> -->
  <!-- <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- `<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>` -->




<!-- main html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilloid</title>
    
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- my stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/3410967858.js" crossorigin="anonymous"></script>
    <!-- flickity slider -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="jquery-3.6.0"></script>

</head>
<body>

<header>
    <input type="checkbox" name="" id="check" >
    <nav>
        <a href="index.html"><div class="logo">
            Skilloid
            </div>
          </a>
        <div class="search_box">
            <input type="search" placeholder="Search here">
            <span><i class="fas fa-search"></i></span>
        </div>
        <ul>
            <li><a href="#"><span><i class="fas fa-bell"></i></span></a></li>
            <li><a href="#">My Courses</a></li>
            <li><a href="contact1.html">Contact Us</a></li>
            <li><a href="profile.html"><span><i class="fas fa-user"></i></span></a></li>

        </ul>
        <label for="check" class="bar">
            <span class="fas fa-bars" id="bars"></span>
            <span class="fas fa-times" id="times"></span>

        </label>
        
    </nav>

</header>

<!-- Hero Banner-->

<section>
    <div class="container">
    <div class="banner">
        
            <div class="banner-content">
                <span> New Courses</span>
                <h1>Java Course</h1>
                <p>New to Coding! Dont worry,We cover everything here.</p>
                <a href="#" class="hero-btn-one">Discover</a>
                <a href="#" class="hero-btn-two">Enroll Now</a>
                
            </div>
        </div>
    </div>
</section>

<!-- Recentlty watched courses slider-->

<section class="carousel-section">

    <div class="carousel-title">
        <h1>
            Enrolled Courses
        </h1>
    </div>
    <div class="border"></div>

    <div class="carousel" data-flickity='{ "cellAlign": "left" }'>

        <div class="carousel-cell">
            <div class="course-img">
                
            </div>

            <div class="course-title">
                <h1>course 1</h1>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="course-img">

            </div>

            <div class="course-title">
                <h1>course 2</h1>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="course-img">

            </div>

            <div class="course-title">
                <h1>course 3</h1>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="course-img">

            </div>

            <div class="course-title">
                <h1>course 4</h1>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="course-img">

            </div>

            <div class="course-title">
                <h1>course 5</h1>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="course-img">

            </div>

            <div class="course-title">
                <h1>course 6</h1>
            </div>
        </div>

        

    </div>


    

</section >

<!-- course card -->
<section class="course-container">

<div class="container">
    
    <div class="course">
        <div class="preview">
            <h6>Course</h6>
            <h2>Web development</h2>
            <a href="#">View all Chapters</a>
        </div>
        <div class="info">
            <div class="progress-wrapper">
                <div class="progress-card">

                </div>
                <span class="progress-text">
                    4/9 Courses
                </span>
            </div>
            <h6>Javascript</h6>
            <h2>Javascript, Html & css</h2>
            <p class="para">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, voluptatem vitae. Sequi consectetur doloribus
            </p>
            <button class="btn">
                Next Chapter
            </button>
        </div>
    </div>
</div>
</section>


<section class="course-card-section">

    <!-- course collection -->

    <div class="carousel-title">
        <h1>
            Courses
        </h1>
    </div>
    <div class="border"></div>

    <section class="course-collection">

        <div class="main">

            <!--cards -->
           
           <div class="card">
           
           <div class="image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2015/11/07/11/41/lake-1031405_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           <div class="card">
           
           <div class="image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           
           </div>
           </div>
           <!--cards -->
           
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           <!--cards -->
           
           
           <div class="card">
           
           <div class="image">
              <img src="https://cdn.pixabay.com/photo/2015/11/07/11/41/lake-1031405_1280.jpg">
           </div>
           <div class="title">
            <h1>
           Write title Here</h1>
           </div>
           <div class="des">
            <p>You can Add Desccription Here...</p>
           <button>Enroll Now</button>
           </div>
           </div>
           </div>-

    </section>

</section>

<!-- footer -->

<!-- footer -->

<footer class="footer">
    <!-- <div class="container"> -->
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    <!-- </div> -->
</footer>


<!-- JS -->
<script>
    const trunc = document.querySelector('.p-trunc');
    trunc.innerText = trunc.innerText.substring(0,100) + '...';
</script>
    
</body>
</html>
