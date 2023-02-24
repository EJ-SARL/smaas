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
                    require_once('composant/client/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_client')
                {
                    
                    require_once('composant/client/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/api/post.php'); 
                }
            else if($demande=='modifier_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_bus')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/api/post.php'); 
                }
            else if($demande=='modifier_bus')
                {
                    
                     //Composant2 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_bus')
                {
                    
                     //Composant2 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/delete.php'); 
                }
              

                else if($demande=='ajouter_appareil')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/ajout/api/post.php'); 
                }
            else if($demande=='modifier_appareil')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_appareil')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/supprimer/api/delete.php'); 
                }




                else if($demande=='ajouter_composant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/ajout/api/post.php'); 
                }
            else if($demande=='modifier_composant')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_composant')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/supprimer/api/delete.php'); 
                }
       

                
                else if($demande=='ajouter_titre')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/titre/ajout/api/post.php'); 
                }
            else if($demande=='modifier_titre')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/titre/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_titre')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/titre/supprimer/api/delete.php'); 
                }


            //Composant4 : recuperer la reponse de la demande Itineraire

            else if($demande=='ajouter_itineraire')
                {
                    //Composant4 : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/api/post.php'); 
                }

              
                else if($demande=='modifier_itineraire')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/modifier/api/put_user.php'); 
                }
        
                else if($demande=='supprimer_itineraire')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/supprimer/api/delete_user.php'); 
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

                else if($demande=='ajouter_arret')
                {
                    //Composant1 : recuperer la reponse de la demande
                  require_once('composant/arret/ajouter/api/post.php');
                
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
                    require_once('composant/client/modifier/api/get_services.php'); 
                }
            else  if($page=='modifier_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/modifier/api/get_service.php'); 
                }
            else  if($page=='supprimer_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/supprimer/api/get_services.php'); 
                }
            else  if($page=='supprimer_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/supprimer/api/get_service.php'); 
                }

            else  if($page=='recuperer_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/recuperer/api/get_services.php'); 
                }
            else  if($page=='recuperer_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/recuperer/api/get_service.php'); 
                }


            else if($page=='ajouter_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_services.php'); 
                }

             else  if($page=='modifier_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_service.php'); 
                }
      
            else  if($page=='supprimer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_services.php'); 
                }

            else  if($page=='supprimer_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_service.php'); 
                }
           
            else  if($page=='recuperer_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_services.php'); 
                }
            
            else  if($page=='recuperer_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_service.php'); 
                }

            else if($page=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/get_services.php'); 
                }

            else  if($page=='modifier_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/get_service.php'); 
                }
            
            else  if($page=='supprimer_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/get_services.php'); 
                }

            else  if($page=='supprimer_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/get_service.php'); 
                }
         
            else  if($page=='recuperer_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/recuperer/api/get_services.php'); 
                }

            else  if($page=='recuperer_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/recuperer/api/get_service.php'); 
                }




                else if($page=='ajouter_appareil')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_appareils')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/modifier/api/get_services.php'); 
                }

             else  if($page=='modifier_appareil')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/modifier/api/get_service.php'); 
                }
      
            else  if($page=='supprimer_appareils')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/supprimer/api/get_services.php'); 
                }

            else  if($page=='supprimer_appareil')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/supprimer/api/get_service.php'); 
                }
           
            else  if($page=='recuperer_appareils')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/recuperer/api/get_services.php'); 
                }
            
            else  if($page=='recuperer_appareil')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/recuperer/api/get_service.php'); 
                }




                else if($page=='ajouter_composant')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_composants')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/modifier/api/get_services.php'); 
                }

             else  if($page=='modifier_composant')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/modifier/api/get_service.php'); 
                }
      
            else  if($page=='supprimer_composants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/supprimer/api/get_services.php'); 
                }

            else  if($page=='supprimer_composant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/supprimer/api/get_service.php'); 
                }
           
            else  if($page=='recuperer_composants')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/recuperer/api/get_services.php'); 
                }
            
            else  if($page=='recuperer_composant')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/recuperer/api/get_service.php'); 
                }




                else if($page=='ajouter_titre')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/titre/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_titres')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/titre/modifier/api/get_services.php'); 
                }

             else  if($page=='modifier_titre')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/titre/modifier/api/get_service.php'); 
                }
      
            else  if($page=='supprimer_titres')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/titre/supprimer/api/get_services.php'); 
                }

            else  if($page=='supprimer_titre')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/titre/supprimer/api/get_service.php'); 
                }
           
            else  if($page=='recuperer_titres')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/titre/recuperer/api/get_services.php'); 
                }
            
            else  if($page=='recuperer_titre')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/titre/recuperer/api/get_service.php'); 
                }



                 //Composant :Ituneraire
           
            else  if($page=='ajouter_itineraire')
                {
                    //Composant : recuperer la reponse de la demande
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
                    require_once('composant/carte/attribuer/api/get_services.php'); 
                }  
                    //exemple

            else  if($page=='recuperer_itineraires')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/recuperer/api/get_users.php'); 
            }
        else  if($page=='recuperer_itineraire')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/recuperer/api/get_user.php'); 
            }
        
            //composant1: Modifier_Itineraire

            else  if($page=='modifier_itineraires')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/modifier/api/get_users.php'); 
            }
        else  if($page=='modifier_itineraire')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/modifier/api/get_user.php'); 
            }

            else  if($page=='supprimer_itineraires')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/supprimer/api/get_users.php'); 
                }
            else  if($page=='supprimer_itineraire')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/supprimer/api/get_user.php'); 
                }
                else  if($page=='ajouter_arret')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/ajouter/api/get_services.php'); 
                }  

        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>