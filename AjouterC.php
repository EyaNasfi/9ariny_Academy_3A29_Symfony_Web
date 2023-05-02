<?php
//include '../Dashboard/Model/Categorie.php';

include_once '../../../../Controller/CategorieC.php';


$nomC="";

$errorMessage = "";
$successMessage = "" ;






// create user
$categorie = null;

// create an instance of the controller
$categorieC = new CategorieC();
if (		
    isset($_POST["nomC"]) 
 
){
    if ( !empty($_POST["nomC"])) {
        $categorie = new Categorie(
            $_POST['nomC'], 

        );
        $categorieC->AjouterCategorie($categorie);
        header("Location:AfficheC.php?successMessage=Categorie ajouté avec succés");

        
        
    }
    else
        $errorMessage = "Missing information";

        
        
        
}   


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <script src ="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
     <script src="Controle.js"></script>
    <title>Gestion Categorie</title>
   
</head>
    <body>
  
  
    <div class="container my-5">
    <center><h1>Nouveau Categorie</h1></center>

    
   
        
      


        <form method="post" class="form" id="form" onsubmit= "return verif();" >


        <table>
            <!--------------------------------------------------------------------------------------------->
            

            <div class=" input-group mb-3 ">
                <label class="col-sm-3 col-form-label ">Nom Categorie</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="nomC" id="nomC" value="<?php echo $nomC; ?>" placeholder= "Nom Categorie" >
                    <div id="testtt"  ></div>
                </div>
            </div>





<!---------------------------------------------Buttons---------------------------------------------->



             <div class="row mb-5">
             <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" name = "Ajouter"  id ="Ajouter"  >Ajouter</button>
             </div>
             <div class="col-sm-3 d-grid">
                 <a class="btn btn-primary" href="AfficheC.php" role="button">Retour</a>
             </div>
          </div>
            </table>
        </form>
        </div>
    </body>
</html>
