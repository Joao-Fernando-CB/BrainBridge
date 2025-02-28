<?php

    namespace DB;

    class Connection {

        public $host;
        public $db;
        public $user;
        public $pass;

        public function __construct() {
            $this->host = DB_HOST;
            $this->db = DB_NAME;
            $this->user = DB_USER;
            $this->pass = DB_PASS;
        }

        public function open() {
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
            $connection = new \PDO($dsn, $this->user, $this->pass);

            return $connection;
        }
    }

?>