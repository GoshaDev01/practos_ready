<?php
spl_autoload_register(function($className) {
    include __DIR__ . "/htmlMaker/classes/$className.php";
});
?>