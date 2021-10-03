<?php
    function createConnection(){
        $server = 'localhost';
        $dbname= 'phpmotors-i-cse340';
        $username = 'iClient';
        $password = 'laX2yyY6ihN16MZ5';
        $dsn = 'mysql:host='.$server.';dbname='.$dbname;
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        // Create the actual connection object and assign it to a variable
        try {
         $link = new PDO($dsn, $username, $password, $options);
        
         /*if(is_object($link)){
            echo 'chevere pelado lo hiciste bien';
         }*/ return $link;
        } catch(PDOException $e) {
        // echo 'Sorry, the connection failed';
        header('Location: /phpmotors/view/500.php');
         exit;
        }
       }
    

createConnection();