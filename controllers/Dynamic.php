<?php

class Dynamic
{
    private array $data = [];

    public function __set(string $name, mixed $value)
    {
       $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function __isset(string $name): bool
    {
        echo $name;

        return true;
    }

    public function __unset(string $name): void
    {
        echo $name;
    }

    public function __call(string $name, array $arguments)
    {
        echo $name;
        print_r($arguments);
    }

    public function __invoke()
    {
        echo 'invoke method';
    }
}