
<?php
//URI
$url = 'http://api.eliajimmy.net/process/';

//Recuperer les variables POST
$email=$_POST['email'];
$password=$_POST['password'];
//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
	'client_id'=> $email,
    'client_secret'=> $password

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
    if($code ==200)
        {   
            session_start();

            $token =  $client->token;
            $prenom =  $client->prenom;
            $nom =  $client->nom;
                    
            $_SESSION['token'] = $token;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom'] = $nom;

            header("Location:/projets/smaas/home/");            
            
        }
    else    
        {
            $message =  $client->message;
                        
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/connexion/ihm/reponse_negative.php');   
        }


?>