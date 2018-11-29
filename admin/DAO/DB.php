<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 11/29/2018
 * Time: 2:02 PM
 */

class DB
{
    //cac bien thong tin ket noi
    private $hostname = 'localhost',
        $username = 'root',
        $password = '',
        $dbname = 'quanlycaycanhstore';
    //bien luu tru ket noi
    public $cn = null;
    //ham ket noi
    public function connect()
    {
        $this->cn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        var_dump($this->cn);
    }
    //ham ngat ket noi
    public function close(){
        if($this->cn){
            mysqli_close($this->cn);
        }
    }
}