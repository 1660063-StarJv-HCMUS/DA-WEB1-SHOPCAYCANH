<?php
     require_once 'DTO/init.php';
     //xóa sessiom
     $session->destroy();
     new Redirect($_DMAIN);
?>