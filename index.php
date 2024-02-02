<?php

define('APP_DIR', __DIR__ . '/');
//
//require_once APP_DIR . 'functions.php';
//require_once APP_DIR . 'classes/GeneralPost.php';
//require_once APP_DIR . 'classes/Order.php';
//require_once APP_DIR . 'interfaces/Test.php';
//require_once APP_DIR . 'interfaces/ShapeInterface.php';
//require_once APP_DIR . 'interfaces/DiscountInterface.php';
//require_once APP_DIR . 'classes/PercentageDiscount.php';
//require_once APP_DIR . 'classes/FixedDiscount.php';
//require_once APP_DIR . 'classes/Person.php';
//require_once APP_DIR . 'classes/A.php';
//require_once APP_DIR . 'classes/B.php';
//require_once APP_DIR . 'classes/C.php';
//require_once APP_DIR . 'traits/Math.php';
//require_once APP_DIR . 'traits/Validator.php';
//require_once APP_DIR . 'controllers/Controller.php';
//require_once APP_DIR . 'controllers/AuthController.php';
//require_once APP_DIR . 'test/Circle.php';
//require_once APP_DIR . 'test/Square.php';
//require_once APP_DIR . 'test/AreaCalculator.php';
//require_once APP_DIR . 'test/AreasSumOutputter.php';
//require_once APP_DIR . 'test/Rectangle.php';

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

//$items = [
//    ['name' => 'PC', 'price' => 25000, 'amount' => 2],
//    ['name' => 'PC mouse', 'price' => 4000, 'amount' => 1],
//    ['name' => 'Monitor', 'price' => 7000, 'amount' => 2],
//];
//
//try {
//    $discount = new PercentageDiscount(50);
//    $discountFixed = new FixedDiscount(2000, 10000);
//    $discountFixed->test('my test text');
//    $order = new Order($items, $discountFixed);
//
//   $order->calculateTotal();
//    $person = new Person('Jim', 30);

//    echo $person::$oldAge;
//    Person::showInfo();
////    echo $person->calculateOldAge();
//} catch (Exception $exception) {
//    echo $exception->getMessage();
//
//    Logger::log($exception->getMessage());
//    exit;
//}
//$a = new A;
//$b = new B;
//$c = new C;
//
//echo $a->getStaticName() . PHP_EOL;
//echo $b->getStaticName() . PHP_EOL;
//echo $c->getStaticName() . PHP_EOL;

//$controller = new AuthController;
//$controller->register();
//$controller->max('test', 11);
//$controller->mathMax('test', 11);


//DRY
//KISS
//YAGNI
//$array = [1,5,4,5,6,1];
//
//$sum = 0;
//foreach ($array as $value) {
//    $sum += $value;
//}
//echo $sum . PHP_EOL;
//
//echo array_sum($array) . PHP_EOL;

// SOLID

//$shapes = [
//  new Circle(2),
//  new Circle(5),
//  new Square(10),
//  new Rectangle(10, 5),
//];
//
//$areas = new AreaCalculator($shapes);
//$output = new AreasSumOutputter($areas);
//echo $output->html();
//echo $areas->output() . PHP_EOL;

//$vip = new VipCustomer();
//$vip->chargeMoney();


//CRUD

/*
 * id
 * name - char 200
 * AGE - TINYINT 200
 * email - char 250
 * password - char 250
 * created_at - timestamp
 * updated_at - timestamp
 * deleted_at - timestamp
 */