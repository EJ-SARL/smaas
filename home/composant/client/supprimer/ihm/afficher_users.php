<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="ui-panels.html">Client</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='10%'>ID</th>
							<th>Prenom</th>
							<th>Nom</th>
							<th>Postnom</th>
							<th >E-mail</th>
							<th >Telephone</th>
							<th >Action</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								for($i=0; $i < count($clients); $i++)
									{
										echo "<tr><td>$i</td><td>". $clients[$i]->nom ." </td><td> " . $clients[$i]->prenom ." </td><td> ". $clients[$i]->postnom." </td><td> ". $clients[$i]->email." </td><td> ". $clients[$i]->telephone ." </td><td><a href='?page=supprimer_client&id=". $clients[$i]->id ."'><button type='button' class='btn btn-red'>Supprimer</button></a><tr>";
									}
							?>
								
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>
