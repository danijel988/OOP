<?php

class Database{
    
    private $dbHost= 'localhost';
    private $dbUsername= 'root';
    private $dbPassword ='';
    private $dbDatabase='task';
    
    public $mysqli;
        
    public function __construct() {
        $this->mysqli = new mysqli($this->dbHost,  $this->dbUsername,  $this->dbPassword,  $this->dbDatabase);
        if(mysqli_connect_errno())
        {
            echo 'Connection failed '.mysqli_error();
            exit();
        }
 else {
     //echo 'Connection made<br>';
 }

    }
    
    public function __destruct() {
        $this->mysqli->close();
    }


}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

