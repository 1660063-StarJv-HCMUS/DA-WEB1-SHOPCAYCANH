<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 11/28/2018
 * Time: 11:00 PM
 */

class DB
{
    var $host = 'localhost';
    var $user = 'root';
    var $password = '';
    var $database = 'caycanhstore';

    public function ExcuteQuery($sql){
        $connection = new mysqli($this->host, $this->user, $this->password, $this->database) or die('cannot connect database');
        mysqli_query($connection, "set name 'utf8'");
        $result = mysqli_query($connection, $sql);
        mysqli_close($connection);
    }

}