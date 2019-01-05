<?php
//Konfigurasi DB

$hostname_pam = "localhost";
$database_pam = "gudang";
$username_pam = "root";
$password_pam = "";
$conn = mysqli_connect($hostname_pam, $username_pam, $password_pam, $database_pam) or die("Connection failed: " . mysqli_connect_error());