<?PHP
    session_start();
    if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')){}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  
  
  <!-- Style navbar -->
  
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
  
  <title>Se connecter</title>
  
</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      
      <div class="logo">
        <!--<h1><a href="../index.html">PFE - Accueil</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="../index.html"><img src="../assets/img/logo.png" class="img-fluid"></a>
      </div>
      
      <!-- ======= navbar ======= -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../main/index.php">Accueil</a></li>
          <li><a href="../main/eatures.php">Caractéristiques</a></li>
          <li><a href="../main/pricing.php">Tarifs</a></li>
          <li><a href="../main/blog.php">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="../main/contact.php">Nous contacter</a></li>
          <li><a class="active" href="../login/login.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      
    </div>
  </header>
      
    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">
    
    <div class="wave">
      
      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>
      
    </div>
    
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          
          
          <div class="content">
            <div class="container">
              
              
              <div class="col-md-6 contents">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="mb-4">
                      <h2><strong>Se connecter</strong><h2>
                        <p class="mb-4">Connectez vous pour retrouver vos documents</p>
                      </div>
                      <form action="#" method="post">
                        <div class="form-group first">
                          <label for="username">Email</label>
                          <input type="text" class="form-control" id="username">
                          
                        </div>
                        <div class="form-group last mb-4">
                          <label for="password">Mot de passe</label>
                          <input type="password" class="form-control" id="password">
                          
                        </div>
                        
                        <div class="d-flex mb-5 align-items-center">
                          <label class="control control--checkbox mb-0"><span class="caption">Se souvenir de moi</span>
                            <input type="checkbox" checked="checked"/>
                            <div class="control__indicator"></div>
                          </label>
                          <span class="ml-auto"><a href="#" class="forgot-pass">Mot de passe oublié ?</a></span> 
                        </div>
                        
                        <input type="submit" value="Se connecter" class="btn text-white btn-block btn-primary button-30">
                        
                        <div class="d-flex mb-5 align-items-center">
                        </label>
                        <span class="ml-auto"><a href="registration.php" class="forgot-pass">S'inscrire</a></span>
                      </div>
                      
                      
                    </form>
                  </div>
                </div>
                
                
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

</section><!-- End Hero -->


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<!-- js navbar -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
</body>

</html>