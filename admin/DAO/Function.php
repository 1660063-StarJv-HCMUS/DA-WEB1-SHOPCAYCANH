<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/09/2018
 * Time: 9:38 PM
 */
// Hàm điều hướng trang
class Redirect {
    public function __construct($url = null) {
        if ($url)
        {
            echo '<script>location.href="'.$url.'";</script>';
        }
    }
}

?>