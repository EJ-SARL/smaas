<div class="col-md-12">
	<div class="alert alert-danger"><strong>Echec</strong> : <?php echo  $message;?></div>
</div>

<form method="POST" action="index.php?demande=connexion"  >			
	 
	 <h4 style="color: red;"></h4>

		<div class="form-group">
					
			<div class="input-group">
						
				<div class="input-group-addon">
							
					<i class="entypo-mail"></i>
				
				</div>
						
				<input type="text" class="form-control" name="email" value=<?php echo $email;?> id="username" required placeholder="Votre adresse email" autocomplete="off" />
					
			</div>
					
		</div>
				
		<div class="form-group">
					
			<h4 style="color: red;"></h4>

				<div class="input-group">
						
					<div class="input-group-addon">
							
						<i class="entypo-key"></i>
						
					</div>
						
					<input type="password" class="form-control" name="password" required id="mdp" placeholder="Votre Mot de passe" autocomplete="off" />
					
				</div>
				
			    <div style='text-align:left;'>

					<input type="checkbox" onclick="voirpass()"> Afficher le mot de passe
					    	    
				</div>
				
		</div>
				
		<div class="form-group">
					
			<button type="submit" class="btn btn-primary btn-block btn-login">
						
				<i class="entypo-login"></i>
						
					Connexion
					
			</button>
		
		</div>
			 
        <div class="login-bottom-links" >
				
			<a href="index.php?op=newuser" class="link">Creer un Compte</a>
				
        	<br />
                
		</div>


		
			
	</form>

					<!--Afficher le mot de passe-->
					<SCRIPT TYPE="text/javascript">
						
						function voirpass()
							{ 
								var input = document.getElementById("mdp"); 
								if (input.type === "password")
									{ 
										input.type = "text"; 
									} 
								else
									{ 
										input.type = "password"; 
									} 
							}
													   
					</script>
			