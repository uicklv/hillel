<?php

trait Validator
{
    private string $test = 'test';
    public function max(string $string, int $max): bool
    {
        echo __TRAIT__;
        if (strlen($string) > $max) {
            return false;
        }

        return true;
    }

    private function min(string $string, int $min): bool
    {
        if (strlen($string) < $min) {
            return false;
        }

        return true;
    }
}