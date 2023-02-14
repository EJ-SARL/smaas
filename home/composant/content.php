<?php 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajouter_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/ajout/api/post.php'); 
                }
            else if($demande=='modifier_client')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/modifier/api/put_user.php'); 
                }
            else if($demande=='supprimer_client')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/supprimer/api/delete_user.php'); 
                }
        
        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];

            if($page=='ajouter_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/modifier/api/get_users.php'); 
                }
            else  if($page=='modifier_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/modifier/api/get_user.php'); 
                }
            else  if($page=='supprimer_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/supprimer/api/get_users.php'); 
                }
            else  if($page=='supprimer_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/supprimer/api/get_user.php'); 
                }

            else  if($page=='recuperer_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/recuperer/api/get_users.php'); 
                }
            else  if($page=='recuperer_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/recuperer/api/get_user.php'); 
                }
           
            
        
        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/client/ajout/ihm/demande_creation.php'); 
        }
      
      
?>