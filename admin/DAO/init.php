<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/09/2018
 * Time: 9:39 PM
 */
// Require các thư viện PHP
require_once 'DB.php';
require_once 'Session.php';
//require_once 'Functions.php';

// Kết nối database
$db = new DB();
$db->connect();
$db->set_char('utf8');

// Thông tin chung
$_DOMAIN = 'http://localhost/newspage/admin/';

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = '';
$date_current = date("Y-m-d H:i:sa");

// Khởi tạo session
$session = new Session();
$session->start();

// Kiểm tra session
if ($session->get() != '')
{
    $user = $session->get();
}
else
{
    $user = '';
}

?>