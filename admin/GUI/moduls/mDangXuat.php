<?php
     require_once __DIR__.'/./DTO/init.php';
     //xóa sessiom
     $session->destroy();
     new Redirect($_DMAIN);
?>