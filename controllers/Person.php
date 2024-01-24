<?php

class Person
{
    private string $name;

    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception('Name is invalid!');
        }

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if (strlen($age) < 1) {
            throw new Exception('Age is invalid!');
        }

        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function printName(): void
    {
        echo $this->getName() . PHP_EOL;
    }

    public function printAge(): void
    {
        echo $this->getAge() . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'destruct <br>';
    }
}