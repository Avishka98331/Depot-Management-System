<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "depot management system";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
