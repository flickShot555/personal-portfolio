<?php

$username='root';
$password='';
$database='portfolio';
$hostname='localhost';

$conn = new mysqli($hostname,$username,$password,$database);

if($conn->connect_error)
    die($conn->connect_error);
