
<?php
//URI
$url = 'http://api.eliajimmy.net/titre/';

//Recuperer les variables POST
$forfait=$_POST['forfait'];
$periode=$_POST['periode'];
$prix=$_POST['prix'];
$zone=$_POST['zone'];
$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'forfait' => $forfait,
    'periode' => $periode,
    'prix' => $prix,
    'zone' => $zone,
   
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
	
    $titre=json_decode($result);
    $code =  $titre->code;
    if($code ==201)
        {   
            $forfait =  $titre->forfait ;
            $periode =  $titre->periode;
            $prix =  $titre->prix;
            $zone =  $titre->zone;
            $id =  $titre->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/titre/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/titre/ajout/ihm/reponse_negative.php');   
        }


?>