<?php
require_once(__DIR__ . "/../model/config.php");

$query = $_SESSION["connection"]->query("UPDATE users SET "
        . "WHERE username = \"" . $_SESSION["name"]. "\"");

if($query){
    echo "true";
}else{
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}