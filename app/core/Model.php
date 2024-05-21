<?php

class Model {
use Database;

    protected $table = 'users';
    protected $limit = 10;
    protected $offset = 0;

    public function where($data, $data_not = []){
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $query .= $key. " = :" . $key ." && ";
        }
        foreach ($keys_not as $key) {
            $query .= $key. " != :" . $key ." && ";
        }

        $query = trim($query, " && ");
        $query .= " LIMIT $this->limit OFFSET $this->offset";

        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);
        return $result;
    }
    public function first($data, $data_not = []){
        $result = $this->where($data, $data_not);
        return $result[0];
    }
    public function insert($data){
        $keys = array_keys($data);
        $query = "SELECT INTO $this->table (name,age,date) VALUES ()";
    }
    public function update($id, $data, $id_column = 'id'){
        
    }
    public function delete($id, $id_column = 'id'){
        
    }
}