<?php

namespace Exceptions;

class MyException extends \Exception
{
    public function allInfo(): string
    {
        return $this->getMessage() . ' ' . $this->getFile()  . ' ' . $this->getLine();
    }
}