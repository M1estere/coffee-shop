<?php
    $server_name = 'localhost';
    $server_username = 'root';
    $server_password = '';

    $db_name = 'coffee_shop';

    $server_connection = mysqli_connect($server_name, $server_username, $server_password);

    if ($server_connection->connect_error) {
        die('Connection error!');
    }

    mysqli_select_db($server_connection, $db_name);
    mysqli_set_charset($server_connection, 'utf8');
?>