<?php

/* Establishes a connection with database. First argument is the server name, second is the username for database, third is password (blank for me) and final is the database name 
*/
$input = json_decode(file_get_contents('php://input'));
echo $input;


    $conn = new PDO('sqlite:chatboxDB.db');
    if($conn){
        // create SQL query for retrieving corresponding reply
    
        $user_messages = $_POST['messages'];
        $query = $conn->query("SELECT * FROM responses WHERE messages LIKE '%$user_messages%'");

        // Execute query on connected database using the SQL query
        $makeQuery = $query->fetchAll(PDO::FETCH_ASSOC);

        if($makeQuery) {  
            $response = $makeQuery[0]["response"];
            echo $response;
        }else echo "Sorry, I don't have a response for that. Make sure to spell everything correctly, or just ask me another question!";
    }else echo "Connection failed" . mysqli_connect_errno();

?>