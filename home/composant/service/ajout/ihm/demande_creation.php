
<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Service</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>

<div class="row">
			
	<div class="col-md-12">
				
		<div class="panel panel-primary" data-collapsed="0">
				
			<div class="panel-heading">

				<div class="panel-title" style="text-align: center;v">
									
				</div>
								
				<h2 style="text-align: center;">Ajouter un service </h2>

			</div>
					
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=ajouter_client"  id="theForm"  role="form" class="form-horizontal form-groups-bordered">
			
					<div class="form-group">		
						<label class="col-sm-3 control-label">Variable</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="variable" class="form-control">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Ajouter</i>
					</div>
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	


					