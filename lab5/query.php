<?php

function query_select($sqlQuery) {
    $host = 'localhost';
	$user = 'root';
	$pass = '';
    $dbname = 'sklep';
    
    $db = mysqli_connect($host, $user, $pass, $dbname);
    $result = mysqli_query($db, $sqlQuery);
    mysqli_close($db);

    while ($row = $result->fetch_assoc()) {
        $return[] = $row;
    }

    return $return;
}

function query($sqlQuery) {
    $host = 'localhost';
	$user = 'root';
	$pass = '';
    $dbname = 'sklep';
    
    $db = mysqli_connect($host, $user, $pass, $dbname);
    $result = mysqli_query($db, $sqlQuery);
    mysqli_close($db);

    return $result;
}
