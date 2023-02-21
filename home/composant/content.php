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

            //Composant2 : recuperer la reponse de la demande Itineraire

            else if($demande=='ajouter_itineraire')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/api/post.php'); 
                }

            else if($demande=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/api/post.php'); 
                }
        

            else if($demande=='attribuer_carte')
                {
                    //Composant1 : recuperer la reponse de la demande
                  require_once('composant/carte/attribuer/api/put.php');
                
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

                 //Composant2 :Ituneraire
           
            else  if($page=='ajouter_itineraire')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/ihm/demande_creation.php'); 
                } 

            else  if($page=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/ihm/demande_creation.php'); 
                } 
                
            else  if($page=='attribuer_carte')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/carte/attribuer/api/get_users.php'); 
                }  
            
        
        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/client/ajout/ihm/demande_creation.php'); 
        }
      
      
?>