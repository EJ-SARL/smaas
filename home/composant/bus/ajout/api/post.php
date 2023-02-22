
<?php
//URI
$url = 'http://api.eliajimmy.net/bus/';

//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$postnom=$_POST['postnom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$role=$_POST['role'];

$password2=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
$mode="formulaire";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'firstName' => $prenom,
    'lastName' => $nom,
    'otherName' => $postnom,
    'telephone'=> $telephone,
	'email'=> $email,
	'password'=> $password2,
    'role'=> $role
    
    

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
	
    $agent=json_decode($result);
    $code =  $agent->code;
    if($code ==201)
        {   
            $prenom =  $agent->prenom;
            $nom =  $agent->nom;
            $postnom =  $agent->postnom;
            $telephone =  $agent->telephone;
            $email =  $agent->email;
            //$password=  $agent->password;
            $role =  $agent->role;
            $id =  $agent->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/agent/ajout/ihm/reponse_negative.php');   
        }


?>