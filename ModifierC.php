<?php
    
    
    //include '../Dashboard/Model/Categorie.php';
    include_once '../../../../Controller/CategorieC.php';

    $error = "";
    $mess = "" ; 

    // create user
    $categorie = null;

    // create an instance of the controller 
    $categorieC = new CategorieC();
    if (		
        isset($_POST["NomC"])) 
        {
        if (			
            !empty($_POST["NomC"])) 
            {
            $categorie = new Categorie(
                $_POST['NomC'], 
            );
            $categorieC->ModifierCategorie($categorie, $_GET["idC"]);
            header('Location:AfficheC.php?mess=Categorie Modifé avec succés');
        }
        else
         //            Partie Controle Saisie //+
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <script src ="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Modification</title>
</head>
    <body>
    <script src="../Controle.js"></script>
        <div class="container my-5" >
        <center><h1>Modifier Categorie</h1></center>
        
        <hr>
		<br>
		<br>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['idC'])){
				$categorie = $categorieC->RecupererCategorie($_GET['idC']);
				
		?>
    
        <form method="post" onchange ="Verif();" >
            <!--------------------------------------------Nom Produit------------------------------------------------->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label "  >Nom Categorie</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="NomC" id="NomC" value="<?php ?>">
                    <a id="test1"></a>
                </div>
            </div>



<!---------------------------------------------Buttons---------------------------------------------->
             <div class="row mb-5">
             <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Modifier</button>
             </div>
             <div class="col-sm-3 d-grid">
                 <a class="btn btn-primary" href="AfficherC.php" role="button">Retour</a>
             </div>
          </div>
            </table>
        </form>
        </div>
        <?php
		}
		?>
    </body>
</html>
