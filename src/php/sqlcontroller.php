<?php
class DatabaseConnect
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $port;
    private $connection;

    public function __construct($host, $username, $password, $database, $port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
    }

    public function setConnection()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

function establishConnection()
{
    $initDBConnection = new DatabaseConnect("172.20.0.2", "root", "root", "db", 3306);
    $initDBConnection->setConnection();
    return $initDBConnection->getConnection();
}