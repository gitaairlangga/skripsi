<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "dbvote";
$koneksi = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
