<?php 
include('layout/header.php');

if (!isset($_SESSION['user'])) {
	header('location:../');
}

?>