<?php
// DB구축 프로그램
class DB
{
    private $DB = null;

    public function Connect() {
        $host = "localhost";
        $dbname = "market";
        $charset = "utf8mb4";
        $user = "root";
        $pass = "";
        if(is_null($this->DB)) {
            $option = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
            $this->DB = new PDO(
                "host=$host;dbname=$dbname;charset=$charset",$user,$pass,$option
            );
            return $this->DB;
        }
    }

    public function execute($sql, $data = []) {
        $q = $this->Connect()->prepare($sql);
        return $q->execute($data);
    }

    public function fetch($sql, $data = []) {
        $q = $this->Connect()->prepare($sql);
        $q->execute($data);
        return $q->fetch();
    }

    public function fetchAll($sql, $data = []) {
        $q = $this->Connect()->prepare($sql);
        $q->execute($data);
        return $q->fetchAll();
    }
}