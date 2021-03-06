<h2>Mes fiches de frais</h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner un visiteur : </h3>
    </div>

    <div class="col-md-4">
        <form action="index.php?uc=etatFrais&action=voirEtatFrais" 
              method="post" role="form">
              <div class="form-group">
              </div>


<label for="lstVisiteur">Visiteur:</label>

<select name="lstVisiteurs" id="lstVisiteurs" class="form-control">
<?php foreach($lesVisiteurs as $unVisiteur){
$nom = $unVisiteur['nom'];
$prenom= $unVisiteur['prenom'];
$id =$unVisiteur['id'];?>
    <option value="<?php echo $id?>"><?php echo $prenom.' '.$nom?></option>
<?php } ?>
</select>
  
            </div>

