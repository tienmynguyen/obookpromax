<?php


/**
 * 
 * Require files
 * 
 */
require_once __DIR__ . '/config/__init.php';
require_once __DIR__ . '/router/index.php';


/**
 * new Instance of router
 */
$router = new Router();


/**
 * handle / route
 */
$router->get('/', 'index.html');


/**
 * handle /home route
 */
$router->get('/trangchu', 'start.html');

/**
 * handle /home route
 */
$router->get('/home', 'start2.html');

/**
 * handle /about route
 */
$router->get('/lib', 'lib.html');


/**
 * handle /contact route
 */
$router->get('/profile', 'profile.html');

/**
 * handle /contact route
 */
$router->get('/trangcanhan', 'profile2.html');

/**
 * handle /contact route
 */
$router->get('/post', 'post.html');


/**
 * handle /contact route
 */
$router->get('/thongke', 'admin.html');

/**
 * handle /contact route
 */
$router->get('/kiemduyet', 'admin2.html');


/**
 * handle /contact route
 */
$router->get('/nhagiakim', 'book.html');

/**
 * handle /contact route
 */
$router->get('/hoangtube', 'book2.html');

/**
 * handle /contact route
 */
$router->get('/test', 'book3.html');