

<?php
$con=mysqli_connect("localhost","root","","entreprise1");
$qury=mysqli_query($con,"SELECT * FROM var_image ORDER BY RAND() LIMIT 1");
$resalt=mysqli_fetch_array($qury);
?>
<form method="post">
        <img  src="<?php echo $resalt['image_url'];?>">
        <input name ="ch_val" type="text" value="<?php echo $resalt ['image_val']; ?>"hidden="yes">
        <input name ="input_text" type="text" required  autocomplete="off"  maxlength="5" >
        <button name="che_bt" type="submit">check</button> 
    </form>
    <?php  
    if(isset($_POST['che_bt'])){

        if($_POST['ch_val']==$_POST['input_text']){ 
            echo"ok";
            header("Location:AjouterC.php?successMessage= Utilisateur ajouté avec succés");    
        } 
        else{
echo "no";
        }
    }
    ?>