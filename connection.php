<?php

$conn = mysqli_connect('localhost', 'root', '', 'apotek');

if (!$conn) {
	die("Connection failed." . mysqli_connect_error());
}

?>