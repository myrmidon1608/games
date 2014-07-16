<?php

    $connect = array (
        'host' => 'localhost', //'myrmidon16.db',
        'database' => 'sidequest', //'main',
        'user' => 'root', //'banjokazooie',
        'password' => '' //'mumbo2jumbo'
    );

    try {
        $dbh = new PDO('mysql:host=' . $connect['host'] . ';dbname=' . $connect['database'], $connect['user'], $connect['password']);
        $alerts = array();
        
    } catch (PDOException $e) {
        print "Error: " . $e->getMessage() . "<br/>";
        die();
    }

?>