<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 11/29/2018
 * Time: 2:02 PM
 */
class DB{
    var $hostname = 'localhost';
    var $username = 'root';
    var $password = '';
    var $dbname = 'quanlycaycanhstore';
    var $ketNoi = null;

    public function KetNoiCSDL(){
        $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        //var_dump($this->connect);
        return $this->ketNoioi;
    }

    public function Select(){
        $query = mysqli_query($this->connect,'select * from taikhoan');
        var_dump($query);
        return $query;
    }

    public function Insert($cauTruyVan){
        $query = mysqli_query($this->ketNoi, $cauTruyVan);
        return $query;
    }

    public function  NgatKetNoiDB(){
        mysqli_close($this->connect);
    }
}