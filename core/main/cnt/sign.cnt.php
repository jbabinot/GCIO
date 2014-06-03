<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y H:i');
?>		
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.html"><i class="entypo-home"></i>Accueil</a>
			</li>
					<li>
			
							<a href="forms-main.html">Contrat de Maintenance</a>
					</li>
				<li class="active">
			
							<strong>Signature du Contrat</strong>
					</li>
					</ol>
<br />


<br />
<br />
<?php
$idcnt = $_GET['idcnt'];

$req = "UPDATE `contrat` SET `etat_cnt`='4' WHERE idcnt=".$idcnt;
mysql_query($req);
echo $req;
?>


<h4>Modifier le contrat</h4>
<hr />
<?php
if($req == true){
?>

<div class="row">
	
	<div class="col-md-12">
		<div class="alert alert-success"><strong>Opération Effectuer!</strong> La signature à bien été enregister.</div>
	</div>
	
</div>

<?php
}else{
?>

<div class="row">
	
	<div class="col-md-12">
		<div class="alert alert-danger"><strong>Opération Echoué!</strong> Une Erreur de Type <a href="<?php echo $rootsite; ?>wiki.php#B2652"><b>B2652</b></a> à été retenue sur le serveur.</div>
	</div>
	
</div>
<?php } ?>


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
	<script src="<?php echo $rootsite; ?>assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.multi-select.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>