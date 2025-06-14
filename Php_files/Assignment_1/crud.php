<?php

use database\database;

include "database.php";

//just an extension of the database class
class crud extends database
{
    public function __construct(){
        parent::__construct();
    }
    public function getData($query)
    {
        $result = $this->conn->query($query);
        if ($result == false) {
            return false;
        }
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    public function execute($query)
    {
        $result = $this->conn->query($query);
        if ($result == false) {
            return false;
        } else {
            return true;
        }
    }
    public function escapeString($string){
        return $this->conn->real_escape_string($string);
    }
}