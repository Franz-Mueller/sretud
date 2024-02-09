<?php

include("./php/sqlcontroller.php");

$connection = establishConnection();

$sql = "SELECT QuestionText FROM questions ORDER BY RAND() LIMIT 1";
$result = $connection->query($sql);
$lol = $result->fetch_assoc();
echo "QuestionText: " . $lol["QuestionText"];

?>