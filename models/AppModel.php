<?php

class AppModel
{
    private $tableName;
    private static $INSERT = 'INSERT INTO';
    public function __construct()
    {}
    public function setTable($tableName = '')
    {
        $this->tableName = $tableName;
    }
    public function getTable(): string
    {
        return $this->tableName;
    }
    public function find()
    {

    }
    public function insert($conn, $data)
    {
        // $keys = array_keys($data);
        // $values = array_values($data);
        // $values = implode(",", $data);
        $sql = self::$INSERT . " '" . $this->tableName . "' (first_name, last_name, email, contact_no)
        VALUES('" . $data['first_name'] . "', '" . $data['last_name'] . "', '" . $data['email'] . "', '" . $data['contact_no'] . "')";
        $result = $conn->query($sql);
        return $result;
    }
    public function delete($conn, $id)
    {
        $sql = "DELETE FROM users WHERE id=$id";
        $res = $conn->query($sql);
        return $res;
    }
}
