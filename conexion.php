<?php

    function conexion(){

    $host = "host=dpg-d71v6ppaae7s73fnj27g-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_f7j7";
    $user = "user=test_f7j7_user";
    $password = "BA0tWuzUtWsutdJlhz3a1trcuJlxNQCD";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>