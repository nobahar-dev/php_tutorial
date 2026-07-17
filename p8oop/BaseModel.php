<?php

class BaseModel {
    protected PDO $db;
    protected string $table;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:dbname=todo;host=localhost", "root", "");

        } catch (PDOException $ex) {
            die("Connection Failed " . $ex->getMessage());
        }
    }

    public function find($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $statement = $this->db->prepare($sql);
        $statement->execute([':id' => $id]);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function create() {
        // create new object
    }

    public function delete() {
        // delete object
    }

    public function update() {
        // update obejct
    }
}
