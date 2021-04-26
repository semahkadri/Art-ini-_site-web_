<?php 

require_once 'C:/xampp/htdocs/mehdi/config.php';

session_start (); 

    require_once 'C:/xampp/htdocs/mehdi/Controller/InfluC.php';
    require_once 'C:/xampp/htdocs/mehdi/Model/Influ.php';

    /*$inf1= new InfluC();
    $liste=$inf1->afficherInfluenceur();*/

    require_once 'C:/xampp\htdocs/mehdi/Controller/TripInfC.php';
    require_once 'C:/xampp/htdocs/mehdi/Model/TripInf.php';

    $trip1= new TripInfC();
    $liste=$trip1->afficherTripInf();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vagary Travels</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Magnigic Popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body style="padding-top: 72px;">
  <header class="header">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="index.php"><img src="img/.png" alt="Directory logo"></a>
            <form class="form-inline d-none d-sm-flex" action="#" id="search">
              <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3"> 
                <label class="label-absolute" for="search_search"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="search_search" placeholder="Search" aria-label="Search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas"></i></button>
              </div>
            </form>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline mt-4 mb-2 d-sm-none" action="#" id="searchcollapsed">
              <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                <label class="label-absolute" for="searchcollapsed_search"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
                <input class="form-control form-control-sm border-0 shadow-0 bg-gray-200" id="searchcollapsed_search" placeholder="Search" aria-label="Search">
                <button class="btn btn-reset btn-sm" type="reset"><i class="fa-times fas">           </i></button>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown"><a class="nav-link" id="homeDropdownMenuLink" href="index.php" >
                   Acceil</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link" id="homeDropdownMenuLink" href="index.php" >
                   Produit</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link" id="homeDropdownMenuLink" href="index.php" >
                   evenement</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link" id="homeDropdownMenuLink" href="index.php" >
                   promotion</a>
              </li>
              <!-- Megamenu-->
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle " id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte</a>
                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="docsDropdownMenuLink">
                                       <a class="dropdown-item" href="login.html">Se connecter </a><a class="dropdown-item" href="signup.html">S'inscrire </a>
                                   </div>
                               </li>
              <!-- /Megamenu end-->
              
              
              <?php
                if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                { 
              ?>

                  <li class="nav-item dropdown ml-lg-3"><a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="avatar avatar-sm avatar-border-white mr-2"<?php echo 'src="'.'img/'.$_SESSION['r'].'"';?> alt="Jack London"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdownMenuLink"><a class="dropdown-item" href="">Login: <?php echo ' '.$_SESSION['l'];?></a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="./logout.php"><i class="fas fa-sign-out-alt mr-2 text-muted"></i> Sign out</a>
                    </div>
                  </li>
                  
                <?php
                }

                else { 
                    echo'    
                   
                    <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a class="btn btn-primary" href="signup.html">ajouter au panier</a></li>';
                }  //
                ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>
    <section class="py-5">
        <?php
          if (isset($_GET['id_inf'])) {
            $influenceur=new InfluC();
            $i=$influenceur->chercherid($_GET['id_inf']); // récupère l'influenceur à afficher de la base
            //foreach($liste as $i) {
        ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mr-lg-auto">
            <div class="card border-0 shadow mb-6 mb-lg-0">
              
              <div class="card-header bg-gray-100 py-4 border-0 text-center"><a class="d-inline-block" href="#"><img class="d-block avatar avatar-xxl p-2 mb-2" src="<?php  echo $i['photo']?>" alt=""></a>
                <h5><?php echo $i['nom'] ?> 
                <br>
                <h5>by</h5><?php echo $i['directeur'] ?>

                <?php
                
                if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                { 

                ?>

                <form method="POST">
                  <!--<button class="btn btn-primary like_button rounded-xl h-100" name="like_button" type="button" data-content_id="7" > Follow </button>-->
                  <button type="submit" class="btn btn-primary rounded-xl h-100" name="follow_button"  value="Follow" >Follow</button>
                </form>
                  <?php
                     if(isset($_POST["follow_button"]) && (!empty($_POST['follow_button']))){
                       //echo "work";
                       include 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/ClientFollowInfC.php';
                       include 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/ClientFollowInf.php';
                       $date = date("Y/m/d");
                       $Res1=new ClientFollowInf($_SESSION['e'],$_GET['id_inf'],$date);
                       $Res1C=new ClientFollowInfC();
                       $Res1C->ajouterUserFollowInf($Res1);

                      try { 
                        $sql = "UPDATE evenement SET nbr_ab_inf = nbr_ab_inf + 1 WHERE id_inf=".$_GET['id_inf'] ;
                        $db = config::getConnexion();
                        $query = $db->query($sql);
                        //echo $query->rowCount() . " records UPDATED successfully <br>";
                        }
                        catch (PDOException $e) {
                            $e->getMessage();
                        }
                    }
                  }
                  ?>

                  <br>
                  
                

              </div>
              <div class="card-body p-4">
                <div class="media align-items-center mb-3">

                  <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                    <svg class="svg-icon text-primary svg-icon-md">
                      <use xlink:href="#diploma-1"> </use>
                    </svg>
                  </div>
                  
                  <div class="media-body">
                    <p class="mb-0"><?php echo $i['id'] ?> K Visitors</p>
                  </div>
                </div>
                <div class="media align-items-center mb-3">
                  <div class="icon-rounded icon-rounded-sm bg-primary-light mr-2">
                    <svg class="svg-icon text-primary svg-icon-md">
                      <use xlink:href="#checkmark-1"> </use>
                    </svg>
                  </div>
                  <div class="media-body">
                    <p class="mb-0">Verified</p>
                  </div>
                </div>
                <hr>
                
                <ul class="card-text text-muted">
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 pl-lg-5">
            <h1 class="hero-heading mb-0">Hello, I'm <?php echo $i['directeur'] ?>!</h1>
            <div class="text-block">
              <p> <span class="badge badge-secondary-light">Joined in <?php echo $i['id'] ?></span></p>
              <p class="text-muted"><?php echo $i['desc_eve'] ?> </p>
            </div>
            <div class="text-block">
              <h4 class="mb-5"><?php echo $i['directeur'] ?>'s upcoming projects!</h4>
              <div class="row">
                <!-- place item-->

                <?php
                  if (isset($_GET['id'])) {
                  $newt=new TripInfC();
                  if($ti=$newt->chercheridInf($_GET['id'])){
                   
                      foreach($liste as $ti) {
                  
                ?>

                

                <div class="col-sm-6 col-lg-4 mb-30px hover-animate" data-marker-id="59c0c8e33b1527bfe2abaf92">
                  <div class="card h-100 border-0 shadow">
                    <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="<?php  echo $ti['photo_influenceur']?>" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="Up_trip_profile.php?id_voy=<?php echo $ti['id'] ?>"></a>
                      
                    </div>
                    <div class="card-body d-flex align-items-center">
                      <div class="w-100">
                        <h6 class="card-title"><a class="text-decoration-none text-dark" href="Up_trip_profile.php?id_voy=<?php echo $ti['id'] ?>"><?php  echo $ti['id']?></a></h6>
                        <div class="d-flex card-subtitle mb-3">
                          <p class="flex-grow-1 mb-0 text-muted text-sm"><?php  echo $ti['nom']?> </p>
                          
                        </div>
                        <p class="card-text text-muted"><span class="h4 text-primary"><?php  echo $ti['id'].' '.'DT'?></span></p>
                      </div>
                    </div>
                  </div>
                </div>

                <?php
                      }
                  }
                  else 
                  echo "This influencer has no trips yet, try again next time :)";
                }
                ?>
                
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php
          }
        ?>
    </section>

    <!-- Footer-->
    <footer class="position-relative z-index-10 d-print-none">
        <!-- Main block - menus, subscribe form-->
        <div class="py-6 bg-gray-200 text-muted"> 
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="font-weight-bold text-uppercase text-dark mb-3">Directory</div>
                <p>Welcome to our page Vagary</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="vimeo"><i class="fab fa-vimeo"></i></a></li>
                </ul>
              </div>
              
              <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                <h6 class="text-uppercase text-dark mb-3">Pages</h6>
                <ul class="list-unstyled">
                  
                  <li><a class="text-muted" href="contact.php">Team                                   </a></li>
                  <li><a class="text-muted" href="contact.php">Contact                                   </a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <!-- Copyright section of the footer-->
        <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 text-center text-md-left">
                <p class="text-sm mb-md-0">&copy; 2020, Your company.  All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                  <li class="list-inline-item"><img class="w-2rem" src="img/visa.svg" alt="..."></li>
                  <li class="list-inline-item"><img class="w-2rem" src="img/mastercard.svg" alt="..."></li>
                  <li class="list-inline-item"><img class="w-2rem" src="img/paypal.svg" alt="..."></li>
                  <li class="list-inline-item"><img class="w-2rem" src="img/western-union.svg" alt="..."></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('${path}icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
  </body>
</html>