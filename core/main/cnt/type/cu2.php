<?php
include ('../../../../inc/header.php');
include ('../../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y H:i');
$idcnt = $_GET['idcnt'];
 
$sql_cnt = mysql_query("SELECT * FROM client,contrat WHERE contrat.idclient = client.idclient AND idcnt=$idcnt");
$donnee_cnt = mysql_fetch_array($sql_cnt);
?>		
	</div>	
	<div class="main-content">
		
<?php include ('../../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
				<li>
					<a href="index.html"><i class="entypo-home"></i>Accueil</a>
				</li>
				<li>
					<a href="forms-main.html">Contrat</a>
				</li>
				<li>
					<a href="forms-main.html">Modification Contrat</a>
				</li>
				<li class="active">
					<strong>CU2 - Check-Up</strong>
				</li>
			</ol>
<br />


<br />
<br />
	


<h4>Modifier Contrat - CU2</h4>
<hr />
<div class="row">
	<div class="col-md-12">
		<div data-collapsed="0" class="panel panel-info">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title">Information sur le contrat CU2</div>
				
				<div class="panel-options">
					<a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
					<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
					<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
					<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
				
				<h2>Contrat Check - Up (par An) / 2 Vérification</h2><br>
				<p>Avec le contrat Check-up, vous assurez à votre entreprise ou a votre domicile, une maintenance de votre matériel préventive ou curative, afin de toujours garder votre matériel opérationnel et à jour.<br>
					La Maintenance se fera à une date précise définie avec le client.</p>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<form class="form-wizard validate" action="valid.cu2.php" method="post" id="rootwizard-2" novalidate="novalidate">
	
	<div class="steps-progress" style="margin-left: 10%; margin-right: 10%;">
		<div class="progress-indicator" style="width: 0px;"></div>
	</div>
	
	<ul>
		<li class="active">
			<a data-toggle="tab" href="#tab2-1"><span>1</span>Récapitulatif client</a>
		</li>
		<li>
			<a data-toggle="tab" href="#tab2-2"><span>2</span>Date de rendez-vous des Contrats</a>
		</li>
		<li>
			<a data-toggle="tab" href="#tab2-3"><span>3</span>Mode de Paiement</a>
		</li>
	</ul>
	
	<div class="tab-content">
		<div id="tab2-1" class="tab-pane active">
			<h1>Information Client</h1>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">ID Client</label>
						<input class="form-control" name="" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['idclient']; ?>" />
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">Nom</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['nom']; ?>" />
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">Prénom</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['prenom']; ?>" />
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">Adresse</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['adresse1']; ?>" />
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">Complément d'adresse</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['adresse2']; ?>" />
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="full_name">Code Postal</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['cp']; ?>" />
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label class="control-label" for="full_name">Ville</label>
						<input class="form-control" name="full_name" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['ville']; ?>" />
					</div>
				</div>
			</div>
			<br>
			<br>
			<h1>Information Contrat</h1>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">ID CONTRAT</label>
						<input class="form-control" name="idcnt" id="full_name" data-validate="required" value="<?php echo $donnee_cnt['idcnt']; ?>" />
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="full_name">Prix</label>
						<input class="form-control" name="prix" id="full_name" data-validate="required" value="<?php 
							if($donnee_cnt['type_cnt'] == 11){echo '99&euro;';}
							if($donnee_cnt['type_cnt'] == 12){echo '179&euro;';}
							if($donnee_cnt['type_cnt'] == 13){echo '499&euro;';}
							if($donnee_cnt['type_cnt'] == 21){echo '199&euro;';}
							if($donnee_cnt['type_cnt'] == 22){echo '359&euro;';}
							if($donnee_cnt['type_cnt'] == 23){echo '639&euro;';}
							if($donnee_cnt['type_cnt'] == 24){echo '1119&euro;';}
							if($donnee_cnt['type_cnt'] == 25){echo '1899&euro;';}
							if($donnee_cnt['type_cnt'] == 31){echo '39&euro;';}
							if($donnee_cnt['type_cnt'] == 32){echo '139&euro;';}
							if($donnee_cnt['type_cnt'] == 33){echo '269&euro;';}
							if($donnee_cnt['type_cnt'] == 41){echo '44&euro;';}
						 ?>" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-sm-3 control-label">Tacite Reconduction</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="reconduction">
								<option value="0">Non</option>
								<option value="1">Oui</option>
							</select>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-sm-3 control-label">Durée du Contrat</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="duree_cnt">
								<option value="12">12 Mois</option>
								<option value="24">24 Mois</option>
								<option value="36">36 Mois</option>
								<option value="48">48 Mois</option>
							</select>
						</div>
					</div>	
				</div>
			</div>
		</div>
		
		<div id="tab2-2" class="tab-pane">
			<h1>Date de rendez-vous</h1>

			<div class="row">
				<div class="form-group">
						<label class="col-sm-3 control-label">Date de Rendez-vous 1</label>
						
						<div class="col-sm-3">
							<input type="text" data-start-view="1" class="form-control datepicker" name="date_rendez_vous1">
						</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
						<label class="col-sm-3 control-label">Date de Rendez-vous 2</label>
						
						<div class="col-sm-3">
							<input type="text" data-start-view="1" class="form-control datepicker" name="date_rendez_vous2">
						</div>
				</div>
			</div>
			
		</div>
		<div id="tab2-3" class="tab-pane">
			<h1>Mode de Paiement</h1>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-sm-3 control-label">Mode de Paiement</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="mode_paiement">
								<option value="1">Espèce</option>
								<option value="2">CB Comptant</option>
								<option value="3">CB 3 Fois</option>
								<option value="4">Chèque Comptant</option>
								<option value="5">Chèque 2 Fois</option>
								<option value="6">Chèque 3 Fois</option>
								<option value="7">Virement</option>
								<option value="8">Prélèvement</option>
							</select>
						</div>
					</div>	
				</div>
			</div>

			
			<div class="row">
				<center>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Valider</button>
				</div>
				</center>
			</div>
			
		</div>
		
		<ul class="pager wizard">
			<li class="previous disabled">
				<a href="#"><i class="entypo-left-open"></i> Previous</a>
			</li>
			
			<li class="next">
				<a href="#">Next <i class="entypo-right-open"></i></a>
			</li>
		</ul>
	</div>

</form>
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul>	
	</div>



	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/typeahead.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/daterangepicker/moment.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.multi-select.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/icheck/icheck.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-switch.min.js"></script>
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/select2/select2.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/polaris/polaris.css">

</body>
</html>