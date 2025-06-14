<?php

namespace database;

use mysqli;

class database
{
    private $host = "172.31.22.43";
    private $username = "Jonathan200594905";
    private $password = "yUVYrTzotQ";
    private $database = "Jonathan200594905";
    protected $conn;
    public function __construct() {
        if (!$this->conn) {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if (!$this->conn) {
                echo "<p>Connected failed: " . mysqli_connect_error() . "</p>";
                exit;
            }
        }
        return $this->conn;
    }
}