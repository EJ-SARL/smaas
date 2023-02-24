<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Appareil</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
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
										
						<h2 style="text-align: center;">Modifier un appareil </h2>
		
					</div>
							
					<div class="panel-body">
								
						<form method="POST" action="index.php?demande=modifier_appareil" role="form" class="form-horizontal form-groups-bordered">

						<input type="HIDDEN" name="id" value=<?php echo $id;?> >
							<div class="form-group">		
								<label class="col-sm-3 control-label">Nom</label>
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="nom" value=<?php echo $nom;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Categorie</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="categorie" value=<?php echo $categorie;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Numero de serie</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="numero_serie" value=<?php echo $numero_serie;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>

							<div class="form-group">		
								<label class="col-sm-3 control-label">Place</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="place" value=<?php echo $place;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>

							<div class="form-group">		
								<label class="col-sm-3 control-label">Quantite</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="quantite" value=<?php echo $quantite;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Modifier</button>
								</div>
							</div>
									
						</form>
								
					</div>
							
				</div>
					
			</div>
				
		</div>