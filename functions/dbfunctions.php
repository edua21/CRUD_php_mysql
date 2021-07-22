<?php

/**
 * Get new Database Connection.
 * @return mysqli
 */

function getDataBaseConnection(){
    $mysqli = new mysqli("127.0.0.1", "root", "root", "libro_visitas");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;
}
