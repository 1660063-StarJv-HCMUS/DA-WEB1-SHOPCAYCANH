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
    var $connect = null;

    public function Connect(){
        $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        //var_dump($this->connect);
        return $this->connect;
    }

    public function Select(){
        $query = mysqli_query($this->connect,'select * from taikhoan');
        var_dump($query);
    }

    public function  disconnectDB(){
        mysqli_close($this->connect);
    }
}