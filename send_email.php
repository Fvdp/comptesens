<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Comptésens est une société qui propose un service de comptabilité, de fiscalité et de droit pour les entreprises individuelles, associations et les PME de moins de 100 salariés"
    />
    <meta name="author" content="fvwebiste" />
    <title>ComptéSens - Expertise Comptable</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- aos -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- Bootstrap css -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts-->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <!-- Glightbox -->
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
  <!-- Vendor autres -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />

    <!-- Core theme CSS -->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
<!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html"><img src="assets/img/logo_comptesens-blanc.png" alt="Comptésens"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">Qui sommes-nous ?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.html#missions" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nos missions
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-body" href="index.html#expertCompta">Expertise Comptable</a></li>
                <li><a class="dropdown-item text-body" href="index.html#expertSociale">Expertise Sociale</a></li>
                <li><a class="dropdown-item text-body" href="index.html#droit">Droit d'entreprise</a></li>
                <li><a class="dropdown-item text-body" href="index.html#conseils">Conseils</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.html#methode" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Notre méthode
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-body" href="index.html#engagement">Notre engagement</a></li>
                <li><a class="dropdown-item text-body" href="index.html#digital">Outils digitaux</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link shrink-doc" href="liens.html#liens">Documentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.html#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Bouton vers le haut -->
<div id="scrollUp">
  <a href="#page-top"><i class="bi bi-arrow-up-short scrollUp"></i></a>
</div>
<!-- head -->
    <section class="page-section bg-bleu text-white" data-aos="fade-up">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="text-center">
        <i class="bi bi-envelope fs-1"></i>
          <h2>Vous avez un message...</h2>
          <hr class="divider" />
          <p class="text-white mb-4 text-center">
          </p>
      </div>
    </section>
    <!-- End head -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/vendor/PHPMailer-master/src/Exception.php';
require 'assets/vendor/PHPMailer-master/src/PHPMailer.php';
require 'assets/vendor/PHPMailer-master/src/SMTP.php';

$nom = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

echo "<strong>votre nom : </strong>".$nom;
echo "<br>";
echo "<strong>votre entreprise : </strong>".$company;
echo "<br>";
echo "<strong>votre email : </strong>".$email;
echo "<br>";
echo "<strong>votre téléphone </strong>: ".$phone;
echo "<br>";
echo "<strong>votre message : </strong>".$message;
echo "<br>";
echo "<br>";
echo "<br>";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'ssl0.ovh.net';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 465;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = 1;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';

if($mail->SMTPAuth){
   $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  'login@ovh.net';    //Adresse email à utiliser
   $mail->Password   =  'password';         //Mot de passe de l'adresse email à utiliser
}

$mail->From       = trim($_POST["email"]);                //L'email à afficher pour l'envoi
/* $mail->FromName   = trim($_POST["email_from_alias"]);          //L'alias de l'email de l'emetteur
 */
/* $mail->AddAddress(trim($_POST["email_to"]));
 */
$mail->Subject    =  "Email du site Comptesens.fr";                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->AltBody = $_POST["message"]; 	       //Texte brut
$mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
      echo 'Message bien envoyé';
}
?>
<!-- Footer-->
    <footer class="border-top py-5">
      <div class="container px-4 px-lg-5">
        <div class="small text-center">
          Copyright &copy; 2022 - ComptéSens - <a href="mentions.html">Mentions Légales </a>
        </div>
        <div class="small text-center mt-3">
          <img src="assets/img/Logo_ordre_des_experts_comptables.png" alt="ordre experts comptable">
        </div>
      </div>
    </footer>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- aos JS -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script>
      AOS.init()
    </script>
    <!-- Bootstrap core JS-->
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <script src="js/main.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- RGPD -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  </body>
</html>