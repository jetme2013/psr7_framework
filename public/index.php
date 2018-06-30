<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 30.06.2018
 * Time: 16:21
 */
use Framework\Http\Request;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$request=new Request();

echo 'hello';