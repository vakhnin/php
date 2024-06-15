<?php
function getDB() {
    static $db = null;
    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USER, PASS, DB) or die("Could not connect: " . mysqli_connect_error());
    }
    return $db;
}

function getOneRow($sql) {
    $result = @mysqli_query(getDB(), $sql) or die(mysqli_error(getDB()));
    return mysqli_fetch_assoc($result);
}

function getRows($sql)  {
    $result = @mysqli_query(getDB(), $sql) or die(mysqli_error(getDB()));
    $array_result = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $array_result[] = $row;
    }

    return $array_result;
}

function executeSQL($sql) {
    @mysqli_query(getDB(), $sql) or die(mysqli_error(getDB()));
    return mysqli_affected_rows(getDB());
}
