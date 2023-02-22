<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Bus</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer le bus ci-dessous ? .</strong> <a href='?page=supprimer_agents'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_agent&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Matricule</th>
							<th>Marque</th>
							<th>Total de place</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $id." </td><td>". $matricule ." </td><td> " . $marque ." </td><td> ". $total_place." </td><tr>";
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
