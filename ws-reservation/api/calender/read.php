<?php
require_once "../Security.php";
require_once "../../Database/Database.php";

$security = new Security();
$security->validateApiKey(getallheaders()["API_KEY"]);

$database = new Database();

$connection = $database->openConnection();

$result = $connection->query("SELECT * FROM Reservation WHERE Active = 1")->fetch_assoc();

var_dump($result);

$database->closeConnection();


