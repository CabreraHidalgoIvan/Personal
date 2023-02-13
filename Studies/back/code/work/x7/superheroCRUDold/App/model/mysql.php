<?php

function Connect($config = array())
{
    $connection = mysqli_connect($config['database']['host'], $config['database']['username'], $config['database']['password'], $config['database']['database'], $config['database']['port']
    );
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}

function Query($query, $connection)
{
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }
    return $result;
}

function ExecuteQuery($query, $connection) {
    $result = mysqli_query($connection, $query);
    if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

        do {
            $data[] = $row;
        } while ($row = mysqli_fetch_array($result, MYSQLI_BOTH));

    } else {
        $data = null;
    }

    mysqli_free_result($result);
    return $data;

}

function Close($connection)
{
    mysqli_close($connection);
    unset($connection);
}