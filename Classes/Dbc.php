<?php 


class Dbc 
{
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';

    private $database = 'FastChat';

    public $conn;

    public function __construct()
    {

        try{

            $this->conn = new PDO('mysql:host='.$this->server.';dbname='.
            $this->database, $this->username, $this->password);

        }
        catch(Exception $e){
            echo 'You cant connect to db: '.$e->getMessage().'';
        }

    }

}