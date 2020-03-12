<?php

sleep(3);

if(!empty($_POST['user_id'])){
    $data = array();
    
    //database details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'tasks';
    

		$url = 'data_json.txt'; // path to your JSON file
		$data1 = file_get_contents($url); // put the contents of the file into a variable
		$characters = json_decode($data1); // decode the JSON feed

		//echo $characters[0]->referral_code;

		foreach ($characters as $character) {
			if($character->referral_code == trim($_POST['user_id'])){
				$data['status'] = 'ok';
		        $data['result'] = $character;
			}
		}

	/*
    //create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
    
    //get user data from the database
	$query = $db->query("SELECT * FROM users WHERE 	referral_code = '{$_POST['user_id']}'");    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
	*/


    //returns data as JSON format
    echo json_encode($data);
}
?>