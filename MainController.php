<?php

class MainController
{
    public function index(ShapeInterface $shape)
    {
        //todo business logic
        $shape->displayInfo($shape->calculateArea());
    }
}