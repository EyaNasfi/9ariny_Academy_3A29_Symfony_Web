<?php
include '../controller/ReserveR.php';
$ReserveR = new ReserveR();
$ReserveR->Deletereserve($_GET["Idreserve"]);
header('Location:Listereserve.php');
