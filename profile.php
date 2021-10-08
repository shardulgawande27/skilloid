
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- my css -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="profile_page.css">
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>
<body>

  <!-- nav bar -->
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
            <li><a href="contact1.html">Contact</a></li>
            <li><a href="#"><span><i class="fas fa-user"></i></span></a></li>

        </ul>
        <label for="check" class="bar">
            <span class="fas fa-bars" id="bars"></span>
            <span class="fas fa-times" id="times"></span>

        </label>
        
    </nav>

</header>

<!-- profile page -->
    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img  src="https://st2.depositphotos.com/1104517/11965/v/600/depositphotos_119659092-stock-illustration-male-avatar-profile-picture-vector.jpg" width="200" height="150" alt="Student dp"/> </img>
                  <h3><?php echo "Welcome ". $_SESSION['username']?></h3>
                </div>
                <div class="card-body">
                  <class class="mb-0"> Home</class>
                  <p class="mb-0">Work</p>
                  <p class="mb-0">Support</p>
                  <p class="mb-0">Settings</p>
                  <p class="mb-0">Sign out</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="special"><i class="far fa-clone pr-1"></i>Your Profile</h3>
                  <nav> 
                      <a href="index.html"> Home </a>
                      <a href="#"> Work</a>
                      <a href="contact1.html"> Support</a>
                      
                      <a href="logout.php"> Logout</a>
                  </nav>
                </div>
                <!-- <div class="card-body pt-0">
                  <table class="table table-bordered">
                    <tr>
                      <th width="30%">Full Name  </th>
                      <td width="2%">:</td>
                      <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                      <th width="30%">Email	</th>
                      <td width="2%">:</td>
                      <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                      <th width="30%">Gender</th>
                      <td width="2%">:</td>
                      <td><input type="text"name="gender"></td>
                    </tr>
                    <tr>
                      <th width="30%">Phone</th>
                      <td width="2%">:</td>
                      <td><input type="text"name="Phone"></td>
                    </tr>
                    <tr>
                      <th width="30%">Address  </th>
                      <td width="2%">:</td>
                      <td><input type="text" name="address"cols="20" rows="10"> </td>
                      
                    </tr>
                  </table>
                </div> -->
              </div>
                <div style="height: 26px"></div>
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Courses Enrolled</h3>
                </div>
                <div class="card-body pt-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


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
</body>
</html>