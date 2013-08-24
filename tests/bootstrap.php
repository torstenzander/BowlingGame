<?php
require_once dirname(__FILE__) . "/../library/SplClassLoader.php";

$classLoader = new SplClassLoader('Zander', dirname(__FILE__) . '/../library');
$classLoader->register();