<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Agent</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-success"><strong>Success !!!</strong> Votre demande de la création du nouveau agent ci-dessous est executée avec success.</div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Prenom</th>
							<th>Nom</th>
							<th>Postnom</th>
							<th>Role</th>
							<th >E-mail</th>
							<th >Telephone</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
								echo "
									<td>$id</td>
									<td>$prenom</td>
									<td>$nom</td>
									<td>$postnom</td>
									<td>$role</td>
									<td>$email</td>
									<td>$telephone</td>
								";
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
