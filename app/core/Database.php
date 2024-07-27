<?php

trait Database{

    private function connect(){

        $string = "mysql:hostname=".DBHOST. "dbname".DBNAME;
         $connect = new PDO ($string, DBUSER, '');
         return $connect;
    }
    
    public function query($query, $data=[]){
        $connect = $this->connect();
        $qry = $connect->prepare($query);

        $checker = $qry->execute($data);
        if($checker){
            $result = $qry->fetchAll(PDO::FETCH_OBJ);
            
        }
        if(is_array($result) && count($result)){
            return $result;
        }

        return false;

    }
}