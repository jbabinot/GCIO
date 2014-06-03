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
			
							<a href="forms-main.html">Contrat</a>
					</li>
				<li class="active">
			
							<strong>Nouveau Contrat</strong>
					</li>
					</ol>
<br />


<br />
<br />
	


<h4>Nouveau Contrat</h4>
<hr />


<form class="form-wizard validate" action="valid.nouv.cnt.php" method="post" id="rootwizard-2" novalidate="novalidate">
	
	<div class="steps-progress" style="margin-left: 10%; margin-right: 10%;">
		<div class="progress-indicator" style="width: 0px;"></div>
	</div>
	
	<ul>
		<li class="active">
			<a data-toggle="tab" href="#tab2-1"><span>1</span>Selection du client</a>
		</li>
		<li>
			<a data-toggle="tab" href="#tab2-2"><span>2</span>Selection du contrat</a>
		</li>
	</ul>
	
	<div class="tab-content">
		<div id="tab2-1" class="tab-pane active">
			
			<div class="row">
				
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-sm-3 control-label">Séléction du Client</label>
						<?php
							$sql_client = mysql_query("SELECT * FROM client");
						?>
						<div class="col-sm-5">
							<select class="form-control" name="idclient">
							<?php
								while($donnee_client = mysql_fetch_array($sql_client))
								{
							?>
								<option value="<?php echo $donnee_client['idclient']; ?>"><?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?></option>
							<?php } ?>
							</select>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div id="tab2-2" class="tab-pane">
			
			<div class="row">
				
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-sm-3 control-label">Selection du Contrat de Maintenance</label>
						
						<div class="col-sm-5">
							
							<select class="selectboxit visible" name="type_cnt" style="display: none;">
								<optgroup label="Contrat Check-Up">
									<option value="11">CU2 --> 99€</option>
									<option value="12">CU4 --> 179€</option>
									<option value="13">CU12 -> 499€</option>
								</optgroup>
								<optgroup label="Contrat Complete Care">
									<option value="21">CC4 --> 199€ </option>
									<option value="22">CC8 --> 359€ </option>
									<option value="23">CC16 -> 639€ </option>
									<option value="24">CC32 -> 1119€</option>
									<option value="25">CC64 -> 1899€</option>
								</optgroup>
								<optgroup label="Contrat One-Shoot">
									<option value="31">OS1 --> 39€</option>
									<option value="32">OS4 --> 139€</option>
									<option value="33">OS8 --> 269€</option>
								</optgroup>
								<optgroup label="Contrat All-In">
									<option value="41">ALL --> 44€ (par pc / par mois)</option>
								</optgroup>
							</select><span id="" class="selectboxit-container selectboxit-container" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" aria-owns=""><span id="" class="selectboxit selectboxit visible selectboxit-enabled selectboxit-btn" name="test" tabindex="0" unselectable="on" style="width: 112px;"><span class="selectboxit-option-icon-container"><i id="" class="selectboxit-default-icon selectboxit-option-icon selectboxit-container" unselectable="on"></i></span><span id="" class="selectboxit-text" unselectable="on" data-val="1" style="max-width: 22px;" aria-live="polite">Alabama</span><span id="" class="selectboxit-arrow-container" unselectable="on"><i id="" class="selectboxit-arrow selectboxit-default-arrow" unselectable="on"></i></span></span><ul class="selectboxit-options selectboxit-list" tabindex="-1" style="min-width: 65px; display: none; max-height: 181px; top: auto;" role="listbox" aria-hidden="true"><span data-disabled="true" class="selectboxit-optgroup-header undefined">United States</span><li class="selectboxit-optgroup-option selectboxit-option  selectboxit-option-first selectboxit-focus selectboxit-selected" data-disabled="false" data-val="1" data-id="0" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Alabama</a></li><li class="selectboxit-optgroup-option selectboxit-option" data-disabled="false" data-val="2" data-id="1" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Boston</a></li><li class="selectboxit-optgroup-option selectboxit-option" data-disabled="false" data-val="3" data-id="2" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Ohaio</a></li><li class="selectboxit-optgroup-option selectboxit-option" data-disabled="false" data-val="4" data-id="3" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>New York</a></li><li class="selectboxit-optgroup-option selectboxit-option  selectboxit-option-last" data-disabled="false" data-val="5" data-id="4" role="option"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon  selectboxit-container"></i></span>Washington</a></li></ul></span>
							
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