
<?php
//URI
$url = 'http://api.eliajimmy.net/itineraire/';

//Recuperer les variables POST
$ligne=$_POST['ligne'];
$itineraire=$_POST['itineraire'];


$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'ligne' => $ligne,
    'itineraire' => $itineraire
   

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
	
    $client=json_decode($result);
    $code =  $client->code;
    if($code ==201)
        {   
            $ligne =  $client->ligne;
            $itineraire =  $client->itineraire;
            $id =  $client->id;
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/itineraire/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/itineraire/ajout/ihm/reponse_negative.php');   
        }


?>