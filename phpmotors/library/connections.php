<?php
    function createConnection(){
        $server = 'localhost';
        $dbname= 'phpmotors';
        $username = 'iClient';
        $password = '2*Y(/py[xi-4UfEM';
        $dsn = 'mysql:host='.$server.';dbname='.$dbname;
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        // Create the actual connection object and assign it to a variable
        try {
         $link = new PDO($dsn, $username, $password, $options);
        
         /*if(is_object($link)){
            echo 'chevere pelado lo hiciste bien';
         } //*/ return $link;
        } catch(PDOException $e) {
        // echo 'Sorry, the connection failed';
        header('Location: /phpmotors/view/500.php');
         exit;
        }
       }
    

createConnection();