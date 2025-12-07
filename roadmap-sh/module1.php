<?php

function sum(...$numbers) {
    return array_sum($numbers);
}

class Database {
    private $connection;

    public function __construct($host, $user, $password, $dbname) {
        $this->connection = new mysqli($host, $user, $password, $dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct() {
        $this->connection->close();
    }

    
}