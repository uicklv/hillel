<?php

class AreaCalculator
{
    private array $shapes;

    public function __construct(array $shapes)
    {
        $this->setShapes($shapes);
    }

    public function sum(): int|float
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'ShapeInterface')) {
                $area[] = $shape->area();
            }
//            if (is_a($shape, 'Square')) {
//                $area[] = pow($shape->getLength(), 2);
//            } elseif (is_a($shape, 'Circle')) {
//                $area[] = pi() * pow($shape->getRadius(), 2);
//            }
        }

        return array_sum($area);
    }

//    public function output(): string
//    {
//        return "Sum areas of all shapes:" . round($this->sum(), 2);
//    }

    /**
     * @param array $shapes
     */
    public function setShapes(array $shapes): void
    {
        $this->shapes = $shapes;
    }

    /**
     * @return array
     */
    public function getShapes(): array
    {
        return $this->shapes;
    }
}