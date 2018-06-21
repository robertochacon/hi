<?php

session_start();
session_unset($_SESSION['id']);
session_unset($_SESSION['user']);
session_unset($_SESSION['role']);
session_destroy();

header("location: ../ ");

?>