<?php

class MySQLDatabase
{

    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;
    public static $loginAuthentication;

    public function __construct($host = "mariadb", $username = "root", $password = "root", $database = "blog")
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect(); // Automatically connect to the database

        // $this->loginAuthentication = new LoginAuthentication($this);

    }

    public function connect()
    {
        try {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            // Proceed with your database operations...
        } catch (mysqli_sql_exception $exception) {
            echo 'Connection failed: ' . $exception->getMessage();
        }
    }

    public function disconnect()
    {
        if ($this->connection) {
            $this->connection->close();
            $this->connection = null;
        }
    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);

        if (!$result) {
            die("Database query failed: " . $this->connection->error);
        }

        return $result;
    }

    public function escape($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
