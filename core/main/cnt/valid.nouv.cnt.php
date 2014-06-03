<?php
//import donnée post
$idclient = $_POST['idclient'];
$type_cnt = $_POST['type_cnt'];

//Incrémentation automatique

$date = date("d-m-Y");




mysql_connect("localhost", "root", "");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

$req = "INSERT INTO `contrat`(`idcnt`, `idclient`, `prix`, `date_ouverture_cnt`, `date_fin_cnt`, `type_cnt`, `etat_cnt`, `duree_cnt`, `reconduction`, `date_rendez_vous1`, `date_rendez_vous2`, `date_rendez_vous3`, `date_rendez_vous4`, `date_rendez_vous5`, `date_rendez_vous6`, `date_rendez_vous7`, `date_rendez_vous8`, `date_rendez_vous9`, `date_rendez_vous10`, `date_rendez_vous11`, `date_rendez_vous12`, `mode_reglement`) 
VALUES (NULL,'$idclient','','$date','','$type_cnt','1','','','','','','','','','','','','','','','')";

mysql_query($req); 
echo $req;
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/LONDON');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Ajout d'un Contrat</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3>L'ajout du contrat pour la date du <?php echo $date; ?> à été ajouté avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/cnt/">
					<button class="btn btn-blue btn-icon" type="button">
						Retour à la page d'accueil Contrat
						<i class="entypo-home"></i>
					</button>
					</a>
				</div>
		<?php
			}else{
		?>
					<div class="row">
	
						<h3>L'ajout du Contrat pour la date du <?php echo $date; ?> à Echouer</h3>
						<a href="<?php echo $rootsite; ?>/core/main/cnt/">
						<button class="btn btn-blue btn-icon" type="button">
							Retour à la page d'accueil Contrat
							<i class="entypo-home"></i>
						</button>
						</a>
					</div>
		<?php } ?>

	
	</div>


<br />

<!-- lets do some work here... --><!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
		
	</div>




	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>