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
$router->get('/', 'index.php');


/**
 * handle /home route
 */
$router->get('/trangchu', 'start.php');

/**
 * handle /home route
 */
$router->get('/home', 'start2.html');

/**
 * handle /about route
 */
$router->get('/lib', 'lib.php');


/**
 * handle /contact route
 */
$router->get('/profile', 'profile.php');

/**
 * handle /contact route
 */
$router->get('/trangcanhan', 'profile2.html');

/**
 * handle /contact route
 */
$router->get('/post', 'post.php');


/**
 * handle /contact route
 */
$router->get('/thongke', 'admin.html');
$router->get('/kiemduyet', 'admin2.html');
$router->get('/book', 'book.php');
$router->get('/hoangtube', 'book2.html');
$router->get('/admin', '/Admin/index.php');
$router->get('/index.php', 'index.php');
$router->get('/logout', 'logout.php');
