
<?php
//URI
$url = 'http://api.eliajimmy.net/arret/';

//Recuperer les variables POST
$itineraire_id=$_POST['itineraire'];
$nom=$_POST['nom'];


$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'itineraire_id' => $itineraire_id,
    'nom' => $nom
   

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
	
    $arret=json_decode($result);
    $code =  $arret->code;
    if($code ==201)
        {   
            $itineraire_id =  $arret->itineraire_id;
            $nom =  $arret->nom;
            $id =  $arret->id;
             
              //Intregration de l'IHM affichant la reponse positive
              require_once('composant/arret/ajouter/ihm/reponse_positive.php'); 
            }
        else    
            {
                
                //Intregration de l'IHM affichant la reponse negative
                require_once('composant/arret/modifier/ihm/reponse_negative.php');   
            }
    

?>