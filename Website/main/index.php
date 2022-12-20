<?PHP
    session_start();
    if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')){}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Lis ça</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
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
</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      
      <div class="logo">
        <a href="main/index.php"><img src="../assets/img/logo.png" class="img-fluid"></a>
      </div>
      
      <!-- ======= navbar ======= -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="features.php">Caractéristiques</a></li>
          <li><a href="pricing.php">Tarifs</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Nous contacter</a></li>
          <li><a class="active" href="../login/login.php">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      
    </div>
  </header>

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
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">N'oubliez plus de prendre votre traitement</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit.</p>
                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Essayer</a></p>
              </div>
              <div class="col-lg-4 iphone-wrap">
                <img src="../assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
                <img src="../assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
    <main id="main">
      
      <!-- ======= Home Section ======= -->
      <section class="section">
        <div class="container">
          
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Plus de doute concernant votre traitement médiacal à suivre</h2>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-people"></i>
                </div>
                <h3 class="mb-3">Connecté à votre pharmacie</h3>
                <p>Vous êtes prévenue de la livraison de voter commande chez votre pharmacien.</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-brightness-high"></i>
                </div>
                <h3 class="mb-3">Facile à utiliser</h3>
                <p>Interface intuitive et fonctions automatisées.</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-bar-chart"></i>
                </div>
                <h3 class="mb-3">Design To Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
              </div>
            </div>
          </div>
          
        </div>
      </section>
      
      <section class="section">
        
        <div class="container">
          <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="col-md-6 mb-5">
              <img src="../assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number">01</span>
                <h3>Téléchargez l'application</h3>
                <p>Disponible sur Android et Iphone.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">02</span>
                <h3>Créez votre profil</h3>
                <p>Vos informations pour avoir un réel suivi sur l'application.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">03</span>
                <h3>Recevez les notifications</h3>
                <p>Rappels sur la prise de votre traitement ou les futures évènements liés à votre santé.</p>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      
      <section class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 me-auto">
              <h2 class="mb-4">Restez chez vous</h2>
              <p class="mb-4">Vous pouvez avoir accès à toutes vos informations, traitement(s) en cours, vaccins à venir depuis notre site web ou application. </p>
              <p><a href="#" class="btn btn-primary">Télécharger maintenant</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="../assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
      
      <section class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
              <h2 class="mb-4">Votre avis compte</h2>
              <p class="mb-4">Nous sommes une start-up qui naît, vos retours compte pour développer au mieux notre application.</p>
              <p><a href="#" class="btn btn-primary">Télécharger maintenant</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="../assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
      
      <!-- ======= Testimonials Section ======= -->
      <section class="section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">Retours de nos premiers utilisateurs</h2>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              
              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                  
                  <div class="swiper-slide">
                    <div class="review text-center">
                      <p class="stars">
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill muted"></span>
                      </p>
                      <h3>Super application</h3>
                      <blockquote>
                        <p>Facile à prendre en main, je recommande cette application à toute personne qui oublie trop souvent de prendre ses médicaments.</p>
                      </blockquote>
                      
                      <p class="review-user">
                        <img src="../assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <span class="d-block">
                          <span class="text-black">Jean Doe</span>, &mdash; App User
                        </span>
                      </p>
                      
                    </div>
                  </div>
                  
                  <div class="swiper-slide">
                    <div class="review text-center">
                      <p class="stars">
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill"></span>
                        <span class="bi bi-star-fill muted"></span>
                      </p>
                      <h3>This App is easy to use!</h3>
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                          aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                          provident voluptates consectetur maiores quos.</p>
                        </blockquote>
                        
                        <p class="review-user">
                          <img src="../assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                          <span class="d-block">
                            <span class="text-black">Johan Smith</span>, &mdash; App User
                          </span>
                        </p>
                        
                      </div>
                    </div>
                    
                    <div class="swiper-slide">
                      <div class="review text-center">
                        <p class="stars">
                          <span class="bi bi-star-fill"></span>
                          <span class="bi bi-star-fill"></span>
                          <span class="bi bi-star-fill"></span>
                          <span class="bi bi-star-fill"></span>
                          <span class="bi bi-star-fill muted"></span>
                        </p>
                        <h3>Awesome functionality!</h3>
                        <blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                            aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                            provident voluptates consectetur maiores quos.</p>
                          </blockquote>
                          
                          <p class="review-user">
                            <img src="../assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                            <span class="d-block">
                              <span class="text-black">Jean Thunberg</span>, &mdash; App User
                            </span>
                          </p>
                          
                        </div>
                      </div>
                      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!-- ======= CTA Section ======= -->
          <section class="section cta-section">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                  <h2>Starts Publishing Your Apps</h2>
                </div>
                <div class="col-md-5 text-center text-md-end">
                  <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
                </div>
              </div>
            </div>
          </section>
          
        </main>
        
        <!-- ======= Footer ======= -->
        <footer class="footer" role="contentinfo">
          <div class="container">
            <div class="row">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>About SoftLand</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
                  dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
                  <p class="social">
                    <a href="#"><span class="bi bi-twitter"></span></a>
                    <a href="#"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-instagram"></span></a>
                    <a href="#"><span class="bi bi-linkedin"></span></a>
                  </p>
                </div>
                <div class="col-md-7 ms-auto">
                  <div class="row site-section pt-0">
                    <div class="col-md-4 mb-4 mb-md-0">
                      <h3>Navigation</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">Tarifs</a></li>
                        <li><a href="#">Caractéristiques</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                      <h3>Services</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">Equipe</a></li>
                        <li><a href="#">Collaboration</a></li>
                        <li><a href="#">Todos</a></li>
                        <li><a href="#">Evenements</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                      <h3>Downloads</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">Get from the App Store</a></li>
                        <li><a href="#">Get from the Play Store</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row justify-content-center text-center">
                <div class="col-md-7">
                  <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
                  <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>
                </div>
              </div>
              
            </div>
          </footer>
          
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