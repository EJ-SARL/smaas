<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">appareil</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-success"><strong>Success !!!</strong> Votre demande de la création du nouveau appareil ci-dessous est executée avec success.</div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Nom</th>
							<th>Categorie</th>
							<th>Numero de sirie</th>
							<th>Place</th>
							<th>Quantite</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
								echo "
									<td>$id</td>
									<td>$nom</td>
									<td>$categorie</td>
									<td>$numero_serie</td>
									<td>$place</td>
									<td>$quantite</td>
								";
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
