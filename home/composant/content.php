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

                if($demande=='ajouter_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/api/post.php'); 
                }
            else if($demande=='modifier_agent')
                {
                    
                     //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/put_user.php'); 
                }
            else if($demande=='supprimer_agent')
                {
                    
                     //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/delete_user.php'); 
                }


                if($demande=='ajouter_bus')
                {
                    //Composant3 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/api/post.php'); 
                }
            else if($demande=='modifier_bus')
                {
                    
                     //Composant13: recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/put_user.php'); 
                }
            else if($demande=='supprimer_bus')
                {
                    
                     //Composant3 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/delete_user.php'); 
                }


            //Composant4 : recuperer la reponse de la demande Itineraire

            else if($demande=='ajouter_itineraire')
                {
                    //Composant4 : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/api/post.php'); 
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


                if($page=='ajouter_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_users.php'); 
                }
            else  if($page=='modifier_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_user.php'); 
                }
            else  if($page=='supprimer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_users.php'); 
                }
            else  if($page=='supprimer_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_user.php'); 
                }

            else  if($page=='recuperer_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_users.php'); 
                }
            else  if($page=='recuperer_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_user.php'); 
                }


                if($page=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/get_users.php'); 
                }
            else  if($page=='modifier_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/get_user.php'); 
                }
            else  if($page=='supprimer_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/get_users.php'); 
                }
            else  if($page=='supprimer_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/get_user.php'); 
                }

            else  if($page=='recuperer_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/recuperer/api/get_users.php'); 
                }
            else  if($page=='recuperer_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/recuperer/api/get_user.php'); 
                }

                 //Composant :Ituneraire
           
            else  if($page=='ajouter_itineraire')
                {
                    //Composant : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/ihm/demande_creation.php'); 
                }  
            
        
        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/client/ajout/ihm/demande_creation.php'); 
        }
      
      
?>