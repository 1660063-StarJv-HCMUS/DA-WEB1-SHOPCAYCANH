<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
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