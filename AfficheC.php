<?php
	include '../../../../Controller/CategorieC.php';


	$categorieC=new CategorieC();

	
	if(isset($_GET['ta']))
	{
		$listeCategorie=$categorieC->triCategorie();
	}
	else
	{
		$listeCategorie=$categorieC->AfficherCategorie();
	}



?>
<html>
	<head>
	<title>Categorie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	</head>
	<body>		
		<div class="container my-5">
		<center><h1>Liste des Categories</h1></center>
           

		<hr>
		<br>
		<?php
           if(isset($_GET['successMessage'])){
            $successMessage = $_GET['successMessage'];
              
            echo "<div class='alert alert-warning alert-dismissible fade show' rol e='alert'>
            '$successMessage'
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>"; 
           }

		   if(isset($_GET['message'])){
            $message = $_GET['message'];
              
            echo "<div class='alert alert-warning alert-dismissible fade show' rol e='alert'>
            '$message'
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>"; 
           }

		   if(isset($_GET['mess'])){
            $mess = $_GET['mess'];
              
            echo "<div class='alert alert-warning alert-dismissible fade show' rol e='alert'>
            '$mess'
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>"; 
           }

          ?>


		<br>
		<table>
			<thead>
				<td><a class="btn btn-primary" href="AjouterC.php" role="button">Nouveau Categorie</a></td>
				
				<td><a class="btn btn-primary" href="AfficherArticle.php?" role="button">Liste des articles</a></td>

				<td>
					<a class="btn btn-primary" href="AfficheC.php?ta=y" role="button">Trier la liste</a>
					</td>
			</thead>
		</table>

		
		

		
		<br>
		<br>
		<table class="table">
		   <thead>
			<tr>
				<th>idC</th>
				<th>NomC</th>	
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			</thead>
			<?php
				foreach($listeCategorie as $categorie){
			?>
			<tr>
				<td><?php echo $categorie['idC']; ?></td>
				<td><?php echo $categorie['nomC']; ?></td>
				<td>
					<form method="GET" action="ModifierC.php">
						<input type="submit"  class="btn btn-primary btn-sm" name="Modifier" value="Modifier">
						<input type="hidden"  value=<?php echo $categorie['idC']; ?>  name="idC">  
					</form>
				</td>
				<td>
					<a  class="btn btn-danger btn-sm"   href="SupprimerC.php?idC=<?php echo $categorie['idC']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		</div>
	</body>
</html>
