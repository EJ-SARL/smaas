<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Client</a>
	</li>
	<li class="active">
		<strong>Modifier</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-success"><strong>Success !!!</strong> Votre demande de modification de l'itineraire ci-dessous est executée avec success.</div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Ligne</th>
							<th>Itineraire</th>
							
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $id." </td><td>". $ligne ." </td><td> " . $itineraire ." </td><tr>";
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
