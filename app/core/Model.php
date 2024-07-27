<?php

class Model{
    use DataBase;
    function test(){
        $query= "select * from clients";
        $result = $this->query($query);
        print_r($result);
    }

    public function create($data){

    }
    public function read($data){

    }
    public function update($id, $data){
        
    }
    public function delete($id, $data){
        
    }
}