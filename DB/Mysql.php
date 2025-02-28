<?php

    namespace DB;

    class Mysql{

        public $connection;

        public function __construct(){
            $this->connection = new \DB\Connection();
            $this->connection = $this->connection->open();
        }

        public function create(){

        }

        public function getOne($arr, $table){
            try{
                $params = [];
                $fields = [];
                $i = 0;
                foreach($arr as $key => $value){
                    $params[] = $value;
                    if($i == 0){
                        $fields[$i] = "$key = ?";
                    }else{
                        $fields[$i] = "AND $key = ?";
                    }   
                    $i+=1;
                }
                $stmt = $this->connection->prepare("SELECT * FROM $table WHERE ".implode(" ", $fields));
                $stmt->execute($params);
                $result = $stmt->fetch(\PDO::FETCH_ASSOC);
                return $result;
            }catch(Exception $e){
                return throw $e;
            }
        }

        public function getAll($table){
            try{
                $stmt = $this->connection->prepare("SELECT * FROM $table");
                $stmt->execute();
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return json_encode($result);
            }catch(PDOException $e){
                return throw $e;
            }
        }

        public function update(){

        }

        public function delete(){

        }

    }