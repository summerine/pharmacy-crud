<?php

$conn = mysqli_connect('localhost', 'root', 'poland', 'apotek');

if (!$conn) {
	die("Connection failed." . mysqli_connect_error());
}

?>