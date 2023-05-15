<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='spmsv4_core';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    die(mysqli_error($con));
}

?>