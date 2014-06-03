<?php
//import donnée post
$idcnt = $_POST['idcnt'];
$prix = $_POST['prix'];
$reconduction = $_POST['reconduction'];
$duree_cnt = $_POST['duree_cnt']; 
$date_rendez_vous1 = $_POST['date_rendez_vous1'];
$date_rendez_vous2 = $_POST['date_rendez_vous2'];
$mode_paiement = $_POST['mode_paiement'];

//Incrémentation automatique

$date = date("d-m-Y");




mysql_connect("localhost", "root", "");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

$req = "UPDATE `contrat` SET `etat_cnt`='2',`duree_cnt`='$duree_cnt',`reconduction`='$reconduction',`date_rendez_vous1`='$date_rendez_vous1',`date_rendez_vous2`='$date_rendez_vous2',`mode_reglement`='$mode_reglement',`prix`='$prix'  WHERE `idcnt`='$idcnt'";

mysql_query($req); 
echo $req;
include ('../../../../inc/header.php');
include ('../../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/LONDON');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../../inc/headerbar.php'); ?>
		<h2>Modification du contrat CU2</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3>Voici le récapitulatif de la modification de votre contrat CU2</h3>
					<table>
						<tr>
							<td>Tacite Reconduction:</td>
							<td>
								<?php
									if($reconduction = 0){echo "Non";}
									if($reconduction = 1){echo "Oui";}
								?>
							</td>
						</tr>
						<tr>
							<td>Durée du Contrat Initial</td>
							<td><?php echo $duree_cnt; ?> Mois</td>
						</tr>
						<tr>
							<td>Date du 1er rendez-vous</td>
							<td><?php echo $date_rendez_vous1; ?></td>
						</tr>
						<tr>
							<td>Date du 2eme Rendez-vous</td>
							<td><?php echo $date_rendez_vous2; ?></td>
						</tr>
						<tr>
							<td>Mode de Paiement Séléctionner</td>
							<td>
								<?php
									switch ($mode_paiement) {
										case '1':
											echo "Espèce";
											break;
										case '2':
											echo "CB Comptant";
											break;
										case '3':
											echo "CB 3 Fois";
											break;
										case '4':
											echo "Chèque Comptant";
											break;
										case '5':
											echo "Chèque 2 Fois";
											break;
										case '6':
											echo "Chèque 3 Fois";
											break;
										case '7':
											echo "Virement";
											break;
										case '8':
											echo "Prélèvement";
											break;
										
										default:
											echo "INC";
											break;
									}
								?>
							</td>
						</tr>
					</table>
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
	
						<h3>Erreur</h3>
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