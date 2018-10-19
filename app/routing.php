<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/',['GET','POST']], // action, url, HTTP method
        ['show', '/item/{id}', ['GET','POST']], // action, url, HTTP method
    ],
    'Category' => [ // Controller
        ['index', '/categories',['GET','POST']], // action, url, HTTP method
        ['show', '/category/{id}', ['GET','POST']], // action, url, HTTP method
    ],
];  