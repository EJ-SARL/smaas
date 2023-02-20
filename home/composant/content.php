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

                    if($demande=='ajouter_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/api/post.php'); 
                }
            else if($demande=='modifier_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/put_user.php'); 
                }
            else if($demande=='supprimer_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/delete_user.php'); 
                }

            //Composant2 : recuperer la reponse de la demande Itineraire

            else if($demande=='ajouter_itineraire')
                {
                    //Composant1 : recuperer la reponse de la demande
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


            //menu agent
            if($page=='ajouter_agent')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/ajout/ihm/demande_creation.php'); 
            }
        else  if($page=='modifier_agents')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/modifier/api/get_users.php'); 
            }
        else  if($page=='modifier_agent')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/modifier/api/get_user.php'); 
            }
        else  if($page=='supprimer_agents')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/supprimer/api/get_users.php'); 
            }
        else  if($page=='supprimer_agent')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/supprimer/api/get_user.php'); 
            }

        else  if($page=='recuperer_agents')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/recuperer/api/get_users.php'); 
            }
        else  if($page=='recuperer_agent')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/agent/recuperer/api/get_user.php'); 
            } 

                 //Composant2 :Ituneraire
           
            else  if($page=='ajouter_itineraire')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/ihm/demande_creation.php'); 
                }  
            
        
        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/client/ajout/ihm/demande_creation.php'); 
        }
      
      
?>