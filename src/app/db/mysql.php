<?php
namespace App\DB;
use \mysqli;

class MySQL extends mysqli {
    private $host = '127.0.0.1';
    private $user = 'root';
    private $passwd = 'toor';
    private $dbname = 'bibliotecam';
    private $port = 3306;

    public function __construct() {
        parent::__construct($this->host,$this->user,$this->passwd,$this->dbname,$this->port);
    }
}