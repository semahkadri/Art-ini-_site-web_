<?php session_start();
?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/mostache.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  
  <body>
  <?php include_once 'include/header.php'; ?>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"> <img src="Assets/img/<?=$_SESSION['image']; ?>" alt="..." class="img-fluid rounded-circle" ></div>
                <div class="title">
                    <h1 class="h5"> <?php echo $_SESSION['name']; ?> </h1>
                    <p>Admin</p>
                </div>
            </div>
        
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active">
                    <a href="index.php"> <i class="icon-home"></i>Accueil </a>
                </li>
                <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Graphiques </a></li> -->
                <!-- <li><a href="forms.html"> <i class="icon-padnote"></i>Formulaires </a></li> -->
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Informations </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="formType.php">Ajouter une catégorie</a></li>
                        <li><a href="ajouterP.php">Ajouter un produit</a></li>
                        <li><a href="ajouter_carte.php">Ajouter une carte de fidélité</a></li>
                        <li><a href="forms_inf.php">Ajouter influenceur</a></li>
                        <li><a href="forms_spons.php">Ajouter Sponsors</a></li>
                        <li><a href="forms_event.php">Ajouter un evenement</a></li>
                        <li><a href="forms_promo.php">Ajouter promotion</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="themes.php">Categories</a></li>
                        <li><a href="produit.php">Produits</a></li>
                        <li><a href="afficher_client.php">Clients</a></li>
                        <li><a href="afficher_carte.php">Cartes Fidélité</a></li>
                        <li><a href="tables_inf.php">Influenceurs</a></li>
                        <li><a href="tables_spons.php">Sponsors</a></li>
                        <li><a href="tables_event.php">Evenements</a></li>
                        <li><a href="tables_promo.php">Promotions</a></li>
                        <li><a href="afficher_commande.php">Commandes</a></li>

                    </ul>
        </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Produit        </li>
          </ul>
        </div>

        <section >
          <div class="container">
                  <div class="title"><strong>Produit table</strong></div>
                  <div class="table-responsive"> 

                  <script>
    function ok() {
        alert("Votre produit a été ajouté avec succès!");
    }


    function surligne(myForm, erreur) {
        if (erreur)
            myForm.style.backgroundColor = "#f57061";
        else
            myForm.style.backgroundColor = "#bff781";
    }

    function verifNB(myForm) {
        //renvoie un entier
        var NB = parseInt(myForm.value);
        //Not a Number
        if (isNaN(NB) || NB < 0) {
            surligne(myForm, true);
            return false;
        } else {
            surligne(myForm, false);
            return true;
        }
    }
    function verifierCaracteres(event) {
	 		
             var keyCode = event.which ? event.which : event.keyCode;
             var touche = String.fromCharCode(keyCode);
                     
             var champ = document.getElementById('mon_input');
                     
             var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                     
             if(caracteres.indexOf(touche) >= 0) {
                 champ.value += touche;
             }
                     
         }

    function verifReff(myForm) {
        if (myForm.value.length == 0) {
            surligne(myForm, true);
            return false;
        } else {
            surligne(myForm, false);
            return true;
        }

    }




    function verifform(f) {

        var NBOk = verifqteP(f.NB);
        var refOk = verifReff(f.ref);

        if (NBOk && refOk)
            return true;
        else {
            
            alert("Veuillez remplir correctement tous les champs");
            return false;
        }
    }
</script>
                   <?php 

include "configg.php";
$total = 0 ;

function verif_Num($str){
  // On cherche tt les caractères autre que [A-Za-z] ou [0-9]
  preg_match("/([^0-9\s])/",$str,$result);
  // si on trouve des caractère autre que A-Za-z ou 0-9
  if(!empty($result)){
    return false;
  }
  return true;
}

if (isset($_GET['id_prod']))
{
	$total++;
	$req="SELECT * from produit inner join categorie on produit.id_categorie=categorie.id where id_prod=".$_GET['id_prod'];
	$db=config::getConnexion();
	$result=$db->query($req);
       foreach($result as $row)

	   {   
		   $id_prod=$row['id_prod'];
           $img_prod=$row['img_prod'];
	       $nom_prod=$row['nom_prod'];
		   $prix_prod=$row['prix_prod'];
		   $id_categorie=$row['id_categorie'];
       $nom_categorie=$row['nom_categorie'];
  
	   }
}
?>

             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
<form align="center" id="myForm" method="get" action="updateP.php">

<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


<input type="hidden" value="<?php echo $id_prod; ?>" name="id_prod">

<tr><td><label> Catégorie </label></td>
<td><input type="text"  value="<?php echo $id_categorie;?>" class="form-control" name="id_categorie" readonly="readonly" placeholder="Catégorie du produit" style="width:400px"> </td></tr>
</td></tr>


<tr><td><label> Nom catégorie </label></td>
<td><input type="text"  value="<?php echo $nom_categorie;?>" class="form-control" name="nom_categorie" readonly="readonly" placeholder="Catégorie du produit" style="width:400px"> </td></tr>
</td></tr>
<tr><td>
<label> Nom du produit </label></td>
<td><input type="text"  value="<?php echo $nom_prod;?>" class="form-control" name="nom_prod" onkeypress="verifierCaracteres(event); return false;" onblur="verifReff(this)" placeholder="Nom du produit" style="width:400px"> </td></tr>


<tr><td><label> Prix </label></td>
<td><input type="number" value="<?php echo $prix_prod;?>" class="form-control"  onblur="verifNB(this)" name="prix_prod" placeholder="Prix en Dt" min="1" max="9999999999" style="width:400px"> </td></tr>

<tr><td><img src="assets/<?php echo $img_prod;?>" width="120" height="120"/> </td>
<td>
<input type="file" class="btn btn-primary" style="width:400px" name="img_prod" enctype= "multipart/form-data" /> </td> </tr>

</table>
<center>
<input type="submit" value="Valider" name="valider" class="btn btn-warning"> 
</center>



</a>

    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
	  </table> 
<form method="get" action="ajouterP.php" >
<br>
<center>
   <button align="center" style="background-color:  #581845 ; width: 300px" class="btn btn-primary btn-block" type="submit" > <a>  Ajouter un autre produit  </a> </button>
   </center>

</form>
</br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Design by <a href="index.html">Art-ini</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Assets/js/front.js"></script>
  </body>
</html>