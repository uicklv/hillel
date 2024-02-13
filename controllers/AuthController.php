<?php

class AuthController extends Controller
{
    use Validator;

    public function login()
    {
        //todo return view login

        echo "Login page";
        exit;
    }

    public function register()
    {
        return view('register.php');
    }

    public function registerProcess()
    {
        $this->validate([
            'name' => ['required', 'min:2', 'max:150'],
            'email' => ['required', 'email', 'max:200'],
            'age' => ['integer'],
            'password' => ['required', 'confirm', 'min:8'],
        ]);

        $name = Request::get('name');
        $email = Request::get('email');
        $age = Request::get('age', 'int');
        $password = Request::get('password', 'int');

        UserRepository::create(['name' => $name, 'password' => $password, 'email' => $email, 'age' => $age]);
        exit;
    }

    public function auth()
    {
        echo "auth method";
        exit;
    }

}