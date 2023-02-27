<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Client</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<div class="row">


<div class="col-md-12">
	<div class="alert alert-danger"><strong>Echec</strong> Code : <?php echo  $httpCode;?></div>
</div>

</div>

<br />
		
<div class="row">
			
			<div class="col-md-12">
						
				<div class="panel panel-primary" data-collapsed="0">
						
					<div class="panel-heading">
		
						<div class="panel-title" style="text-align: center;v">
											
						</div>
										
						<h2 style="text-align: center;">Ajouter l'itineraire </h2>
		
					</div>
							
					<div class="panel-body">
								
					<form method="POST" action="index.php?demande=ajouter_itineraire"  id="theForm"  role="form" class="form-horizontal form-groups-bordered">
			
			<div class="form-group">		
				<label class="col-sm-3 control-label">Ligne</label>
					<div class="col-sm-5">
						<div class="input-group">
							<span class="input-group-addon"><i class="entypo-user"></i></span>
							<input type="text" name="ligne" class="form-control">
							<span class="input-group-addon"><i class="entypo-user"></i></span>
						</div>
					</div>
			</div>

			<div class="form-group">		
				<label class="col-sm-3 control-label">Itineraire</label>			
					<div class="col-sm-5">
						<div class="input-group">
							<span class="input-group-addon"><i class="entypo-user"></i></span>
							<input type="text" name="itineraire" class="form-control">
							<span class="input-group-addon"><i class="entypo-user"></i></span>
						</div>
					</div>
			</div>

			
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Ajouter</button>
								</div>
							</div>
									
						</form>
								
					</div>
							
				</div>
					
			</div>
				
		</div>