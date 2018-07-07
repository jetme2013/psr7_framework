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

$request = \Framework\Http\RequestFactory::fromGlobals($_GET, $_POST);

$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new \Framework\Http\Response('hello, ' . $name . '!'))
    ->withHeader('X-Developer', 'Mike');

header('HTTP/1.0'.$response->getStatusCode().' '.$response->getStatusPhrase());
foreach ($response->getHeaders() as $name=>$value){
         header($name.':'.$value);
}

echo $response->getBody();