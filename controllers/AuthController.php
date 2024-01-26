<?php

class AuthController extends Controller
{
    use Validator, Math {
        Validator::max insteadof Math;
        Math::max as mathMax;
    }

    public function register()
    {
//        $name = '1';
//        $email = 'jim@gmail.com';

        $this->max('test',5);
//        echo 'Success';
    }

//    public function max(string $string, int $max): bool
//    {
//        echo 'max in class';
//        return true;
//    }

}