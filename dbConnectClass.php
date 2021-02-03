<?php

class DbConnectClass {
    const DB_USER = "root";
    const DB_PASS = "aoki0327";

    public $dbh = '';

    public function  __construct() {
        $this->dbh = new PDO('mysql:host=localhost;dbname=hotel_app;charset=utf8',self::DB_USER, self::DB_PASS);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getHotelsDataFromAreaId(int $areaId) 
    {
        $sql = "select * from hotels where area_id = ". $areaId;
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getHotelsDataFromId($id) 
    {
        $sql = "select * from hotels where ID = ". $id;
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}