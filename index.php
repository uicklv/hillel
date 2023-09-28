<?php

//require_once 'MainController.php';
//require_once 'Shape.php';
//require_once 'DisplayInterface.php';
//require_once 'ShapeInterface.php';
//require_once 'Rectangle.php';
//require_once 'Circle.php';
//
//
//$rectangle = new Rectangle(400, 200);
//$circle = new Circle(100);
//
//$controller = new MainController;
//
//$controller->index($circle);

//class Person
//{
//    protected string $name;
//    protected int $age;
//
//    public static $retirenmentAge = 65;
//
//    public static $counter = 0;
//
//    public function __construct(string $name, int $age)
//    {
//        self::$counter++;
//        $this->setName($name);
//        $this->setAge($age);
//    }
//
//    public function sayHello()
//    {
//        echo "Hello, $this->name! Your age - $this->age." . self::showAge() . PHP_EOL;
//    }
//
//    public static function getCounter()
//    {
//        return self::$counter;
//    }
//
//    public static function showAge(): string
//    {
//        return "Retirenment Age - " . self::$retirenmentAge;
//    }
//
//    /**
//     * @param int $age
//     */
//    public function setAge(int $age): void
//    {
//        if ($age <= 0) {
//            throw new Exception("Invalid age.");
//        }
//        $this->age = $age;
//    }
//
//    /**
//     * @param string $name
//     */
//    public function setName(string $name): void
//    {
//        if (strlen($name) < 2) {
//            throw new Exception("Invalid name.");
//        }
//        $this->name = $name;
//    }
//
//    /**
//     * @return int
//     */
//    public function getAge(): int
//    {
//        return $this->age;
//    }
//
//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return $this->name;
//    }
//}
//
//$person1 = new Person('Jim', 25);
//$person2 = new Person('Kate', 25);
//$person3 = new Person('Mike', 25);
//$person4 = new Person('Mike', 25);
//
//echo Person::getCounter(). PHP_EOL;

class Shape
{
    public static function name()
    {
        return 'Shape';
    }
    public static function getName()
    {
        return static::name();
    }
}

class Rectangle extends Shape
{
    public static function name()
    {
        return 'Rectangle';
    }
}

$shape = new Shape;
$rectangle = new Rectangle;

//echo Shape::$name . PHP_EOL;
//echo Rectangle::$name . PHP_EOL;
//todo add new  functionality
echo $shape::getName() . PHP_EOL;
echo $rectangle::getName() . PHP_EOL;