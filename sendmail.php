<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


//includes reclamation
include 'C:/xampp/htdocs/aziz/Controller/livraisonL.php';
include_once 'C:/xampp/htdocs/aziz/Model/livraison.php';
//end

if (isset($_POST["Ajouter"])){
    $mail = new PHPMailer(true);


    //creation de la reclamation 

    // create user
    $livraison = null;

    // create an instance of the controller
    $livraisonL = new livraisonL();
    
    
    
      
            //If the user has checked the Captcha box
            if (		
              isset($_POST["Adresselivreure"]) &&
              isset($_POST["Couttotal"]) &&
              isset($_POST["NomLivreure"]) &&
              isset($_POST["TelLivreure"]) &&
              isset($_POST["VehiculeLivreure"]) &&
              isset($_POST["StatutLivreure"]) &&
              isset($_POST["Datelivreure"]) 
             
              ){
            if (  !empty($_POST["Adresselivreure"]) &&
              !empty($_POST["Couttotal"]) &&
              !empty($_POST["NomLivreure"]) &&
              !empty($_POST["TelLivreure"]) &&
              !empty($_POST["VehiculeLivreure"]) &&
              !empty($_POST["StatutLivreure"]) &&
              !empty($_POST["Datelivreure"]) 
              )
            {
                
                $livraison = new livraison(
                  $_POST["Adresselivreure"],
                  $_POST["Couttotal"],
                  $_POST["NomLivreure"],
                  $_POST["TelLivreure"],
                  $_POST["VehiculeLivreure"],
                  $_POST["StatutLivreure"],
                  $_POST["Datelivreure"]
                
                
                );
                $livraisonL->Ajouterlivraison($livraison);
                error_log("success");
                //  header("Location:Afficherlivraison.php?successMessage= livraison ajouté avec succés");     
            }
              else
                  $errorMessage = "<label id = 'form' style = 'color: red; font-weight: bold;'>&emsp;Une Information manquant !</label> ";                      
          } 


    //end 

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com' ; 
$mail->SMTPAuth = true ; 
$mail->Username = 'khouloud.abid@esprit.tn' ; 
$mail->Password = 'hinrzzbvsmdrsgsq' ; // your gmail app passwords
$mail->SMTPSecure = 'ssl' ; 
$mail->Port = 465 ; 


$mail->setFrom('khouloud.abid@esprit.tn');
$mail->addAddress($_POST["Adresselivreure"]);
$mail->isHTML(true);


$mail->Subject = 'testing' ; 
$mail->Body = 'livraison ajouté avec succées';

$mail->send();


echo
"
<script>
alert('Sent Successfully');
document.location.href = '../../../Template Frond End/contact.php';
</script>
";
}
?>
