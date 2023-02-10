<div class="login-form">
		
    <div class="login-content">

            <?php
                //Structure de controle pour affichier les composants

                //Est-ce que le visiteur sollicte de créer un compte ou se connecter?
                if(isSet($_GET['op']))
				    {
                        //Sous-composant 1 : formulaire de connexion
					    require_once("composant/content/add_user_form.php");	
				    }
			    else 
				    {
					    //Sous-composant 2 : formulaire de connexion
                        require_once("composant/content/login_form.php");
					
                    }

                

            ?>	
    
    </div>

</div>