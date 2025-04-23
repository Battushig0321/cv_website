<?php
$mysqli = new mysqli("localhost", "root", "", "cb_database");
if ($mysqli->connect_error) {
    die("DB холболтын алдаа: " . $mysqli->connect_error);
}
?>
