<?php

define('APP_DIR', __DIR__ . '/');
//
require_once APP_DIR . 'functions.php';
require_once APP_DIR . 'classes/GeneralPost.php';
require_once APP_DIR . 'classes/Order.php';
//require_once APP_DIR . 'classes/Post.php';
//require_once APP_DIR . 'classes/Blog.php';
//require_once APP_DIR . 'classes/News.php';
//require_once APP_DIR . 'classes/MiniBlog.php';
//require_once APP_DIR . 'classes/VideoBlog.php';
//require_once APP_DIR . 'classes/MiniVideoBlog.php';
//
//$blog = new Blog('my first blog', 'content for my first blog');
//$news = new News('news 1', 'content for news');
//$miniblog = new MiniBlog('video', 'video content');
//$videoBlog = new VideoBlog('video', 'video blog');
//$miniVideoBlog = new MiniVideoBlog('video', 'video blog');

//var_dump($blog instanceof Post);
//var_dump($blog instanceof Blog);
//var_dump($news instanceof Post);
//var_dump($news instanceof News);
//var_dump($post instanceof News);

//showPost($blog);
//showPost($news);
//showPost($miniblog);
//showPost($videoBlog);
//showPost($miniVideoBlog);

$items = [
    ['name' => 'PC', 'price' => 25000, 'amount' => 2],
    ['name' => 'PC mouse', 'price' => 4000, 'amount' => 1],
    ['name' => 'Monitor', 'price' => 7000, 'amount' => 2],
];

try {
    $order = new Order($items);

    echo $order->calculateTotal();
} catch (Exception $exception) {
    echo $exception->getMessage();
    exit;
}


