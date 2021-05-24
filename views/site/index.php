<?php

/* @var $this yii\web\View */

$this->title = 'Licorne Application';

/*$conn = mysqli_connect("localhost","root","","ecole") or die(mysqli_error());
mysqli_select_db($conn,"site");
$sql = mysqli_query($conn,"echo eleve(Nom_Eleve)");*/

$bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
$parent = $bdd->query('SELECT * FROM Parents');
$donnees_parent = $parent->fetch();
$section = $bdd->query('SELECT * FROM Section');
$donnees_section = $section->fetch();
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Application Licorne</h1>

        <p class="lead">Livret Informatisé des COmpétences des écoles mateRNElles</p>
	
        <p><a class="btn btn-lg btn-success" href="https://www.google.com/">Lien utile (google)</a></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Parents et Sections </h2>

                <p>
				<?php
				while ($donnees_parent = $parent->fetch()){
				if($donnees_section = $section->fetch()){
				?>
				<p>
				Parents : <?php echo $donnees_parent['Nom_Parent'];?>, <?php echo $donnees_parent['Prenom_Parent']; ?><br />
				Numéro : <?php echo $donnees_parent['Telephone_Parent']; ?>, Rue : <?php echo $donnees_parent['Rue_Parent']; ?>, Localité : <em><?php echo $donnees_parent['Localite_Parent']; ?></em><br />
				Section : <?php echo $donnees_section['Libellé_sec']; ?><br />
				</p>
				<?php
				}
				}
				?>
				</p>
				 					
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Titre Paragraphe 2</h2>

                <p>Paragraphe 2</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Titre Paragraphe 3</h2>

                <p>Paragraphe 3</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>


	
	
    
	
    
	
	




