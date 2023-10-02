<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "root","mlm-delhi");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


  if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
     $query = "INSERT INTO `user`(`name`, `email`, `mobile`, `catid`, `password`) VALUES ('$name','$email','$mobile',' $id','$password')";
     $sql = mysqli_query($conn,$query);
     if($sql==1){
      echo "chut";
      echo "<script>
      alert('your registration has been successful');
      window.location.href='package.php';
      </script>";
     }
  }
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<head>
  <title>Register </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, and Stocks Trading Business">
  <meta name="author" content="thetork">
  <meta name="keywords" content="Bitrader, Crypto, Forex, and Stocks Trading Business">
  <meta name="description"
    content="Experience the power of Bitrader, the ultimate HTML template designed to transform your trading business. With its sleek design and advanced features, Bitrader empowers you to showcase your expertise, engage clients, and dominate the markets. Elevate your online presence and unlock new trading possibilities with Bitrader.">

  <!-- OG meta data -->
  <meta property="og:title"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, and Stocks Trading Business">
  <meta property="og:site_name" content=Bitrader>
  <meta property="og:url" content="index.html">
  <meta property="og:description"
    content="Welcome to Bitrader, the game-changing HTML template meticulously crafted to revolutionize your trading business. With its sleek and modern design, Bitrader provides a cutting-edge platform to showcase your expertise, attract clients, and stay ahead in the competitive trading markets.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/og.png">



  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/all.min.css">

  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- main css for template -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="assets/images/logo/preloader.png" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="dark-btn" id="btnSwitch">
      <img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon">
      </span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->


<!-- ===============>> Header section start here <<================= -->
<header class="header-section header-section--style2">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="index-2.html">
              <img class="dark" src="assets/images/logo/logo.png" alt="logo">
            </a>
          </div>
          <div class="menu-area">
           

          </div>
          <div class="header-action">
            <div class="menu-area">
              <div class="header-btn">
               
              </div>

              <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->


  <!-- ===============>> account start here <<================= -->
  <section class="account padding-top padding-bottom sec-bg-color2">
    <div class="container">
      <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
        <div class="account__inner">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="account__thumb">
                <img src="assets/images/account/1.png" alt="account-image" class="dark">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="account__content account__content--style2">

                <!-- account tittle -->
                <div class="account__header">
                  <h2>Register</h2>
                  <p class="mb-0">Join our club by filling out the form for event, news, and promotion updates. Contact
                    us with questions. Don't miss out on the fun!</p>
                </div>

                <!-- account form -->
                <form action="" method="POST">
                  <div class="row g-3">
                    <div class="col-12 col-md-12">
                      <div>
                        <label for="first-name" class="form-label">First name</label>
                        <input class="form-control" type="text" name="name" id="first-name" placeholder="Enter Full Name" required>
                      </div>
                    </div>
                    <div class="col-12 col-md-12">
                      <div>
                        <label for="last-name" class="form-label">Mobile</label>
                        <input class="form-control" name="mobile" type="number" id="last-name" placeholder="Enter Moble" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div>
                        <label for="account-email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="account-email" placeholder="Enter your email"
                          required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-pass">
                        <label for="account-pass" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control showhide-pass" id="account-pass"
                          placeholder="Password" required>

                        <!-- <button type="button" id="btnToggle1" class="form-pass__toggle"><i id="eyeIcon1"
                            class="fa fa-eye"></i></button> -->
                      </div>
                    </div>
                   
                  </div>

                  <button type="submit" name="submit" value="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign Up</button>
                </form>


                
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> account end here <<================= -->





  <!-- vendor plugins -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/fslightbox.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>



  <script src="assets/js/custom.js"></script>


</body>


</html>