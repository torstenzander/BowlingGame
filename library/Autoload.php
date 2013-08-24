<?php
require_once __DIR__ . "/../SplClassLoader.php";

$classLoader = new SplClassLoader('Zander', __DIR__);
$classLoader->register();

