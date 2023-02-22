<?php
$id=$_POST['id'];

$url = 'http://api.eliajimmy.net/bus/'.$id;


//Recuperer les variables POST
$matricule=$_POST['matricule'];
$marque=$_POST['marque'];
$total_place=$_POST['total_place'];

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'matricule' => $matricule,
    'marque' => $marque,
    'total_place' => $total_place,
	

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $bus=json_decode($result);
    $code =  $bus->code;
    if($code ==200)
        {   
            $matricule =  $buss->matricule;
            $marque =  $buss->marque;
            $total_place =  $buss->total_place;
           
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/bus/modifier/ihm/reponse_positive.php'); 
            }
        else    
            {
                
                //Intregration de l'IHM affichant la reponse negative
                require_once('composant/bus/modifier/ihm/reponse_negative.php');   
            }
    
    
?>