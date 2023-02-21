<?php
$id=$_POST['id'];
<<<<<<< HEAD
$url = 'http://api.eliajimmy.net//'.$id;
=======
$url = 'http://api.eliajimmy.net/utilisateur/'.$id;
>>>>>>> a21073b2cbb0387459fdc65930121a5eebfdbf5b

//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$postnom=$_POST['postnom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];
//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
$mode="formulaire";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'firstName' => $prenom,
    'lastName' => $nom,
    'otherName' => $postnom,
	'email'=> $email,
	'telephone'=> $telephone,
    'password'=> $password,
    'mode'=> $mode

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
	
<<<<<<< HEAD
    $agents=json_decode($result);
    $code =  $agents->code;
    if($code ==200)
        {   
            $prenom =  $agents->prenom;
            $nom =  $agents->nom;
            $postnom =  $agents->postnom;
            $telephone =  $agents->telephone;
            $email =  $agents->email;
            $id =  $agents->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/agent/modifier/ihm/reponse_positive.php'); 
=======
    $client=json_decode($result);
    $code =  $client->code;
    if($code ==200)
        {   
            $prenom =  $client->prenom;
            $nom =  $client->nom;
            $postnom =  $client->postnom;
            $telephone =  $client->telephone;
            $email =  $client->email;
            $id =  $client->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/utilisateur/modifier/ihm/reponse_positive.php'); 
>>>>>>> a21073b2cbb0387459fdc65930121a5eebfdbf5b
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
<<<<<<< HEAD
            require_once('composant/agent/modifier/ihm/reponse_negative.php');   
=======
            require_once('composant/utilisateur/modifier/ihm/reponse_negative.php');   
>>>>>>> a21073b2cbb0387459fdc65930121a5eebfdbf5b
        }


?>