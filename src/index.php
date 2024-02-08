<?php
$host = "172.23.0.2";
$username = "root";
$password = "root";
$database = "db";
$port = 3306;
$connection = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port,
);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT QuestionText FROM questions ORDER BY RAND() LIMIT 1";
$result = $connection->query($sql);
$lol = $result->fetch_assoc();
echo "QuestionText: " . $lol["QuestionText"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <p>
        <? print $result; ?>
    </p>
</body>

</html>