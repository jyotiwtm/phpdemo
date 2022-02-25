<?php

function redirect($location) {
    echo '<script>window.location.href="' . $location . '";</script>';
    die;
}

?>