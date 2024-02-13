<?php

trait Validator
{
    public  array $errors = [];

    public function max(string $string, int $max): bool
    {
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

    private function required(string $fieldName): bool
    {
        $value = Request::get($fieldName);
        if (!$value) {
            return false;
        }

        return true;
    }

    private function email(string $fieldName): bool
    {
        $email = Request::get($fieldName);

        if (!preg_match('/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/', $email)) {
            return false;
        }

        return true;
    }

    public function validate(array $rules)
    {
        if (!$rules) {
            return;
        }

        foreach ($rules as $fieldName => $ruleArray) {
            foreach ($ruleArray as $rule) {
                //required
                if ($rule === 'required') {
                    if (!$this->required($fieldName)) {
                        $this->errors[$fieldName] = $this->getErrorMessage('required', $fieldName);
                    }
                }

                //email
                if ($rule === 'email') {
                    if (!$this->email($fieldName)) {
                        $this->errors[$fieldName] = $this->getErrorMessage('email', $fieldName);
                    }
                }
            }
        }

        $this->checkErrors();
    }

    private function checkErrors()
    {
        if ($this->errors) {
            Session::set('validation_errors', $this->errors);
            Response::redirect(Request::getReferer());
        }
    }

    private function errorsMessages(): array
    {
        return [
          'required' => "The %s field is required",
          'email' => "The %s field should be contain correct email",
        ];
    }

    private function getErrorMessage(string $key, string $fieldName): string
    {
        $messages = $this->errorsMessages();
        if (!isset($messages[$key])) {
            throw new Exception('Invalid error message');
        }
        return sprintf($messages[$key], $fieldName);
    }
}