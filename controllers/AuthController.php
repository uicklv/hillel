<?php

class AuthController extends Controller
{
    use Validator;

    public function login()
    {
        return view('login.php');
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
        $password = password_hash(Request::get('password'), PASSWORD_BCRYPT);

        $connector = Connector::getInstance();
        $repository = new UserRepository($connector);
        $repository->create(['name' => $name, 'password' => $password, 'email' => $email, 'age' => $age]);

        Session::set('success', 'Registered Successfully!');

        Response::redirect(url('login'));
    }

    public function auth()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email = Request::get('email');
        $password = Request::get('password');

        $connector = Connector::getInstance();
        $repository = new UserRepository($connector);

        if ($user = $repository->auth($email, $password)) {
            $token = md5(time() . '_' . $user->id);
            $repository->createSession($user->id, $token);

            setcookie('auth', $token, time() + 3600 * 24 * 2);

            Auth::setUser($user);

            Response::redirect(url('blogs'));
        }

        Session::set('validation_errors', ['email' => 'Invalid email or password']);
        Response::redirect('http://localhost:8080/login');
    }

    public function logout()
    {
        Auth::protect();

        setcookie('auth', '', time() - 3600);
        session_destroy();

        $connector = Connector::getInstance();
        $repository = new UserRepository($connector);
        $repository->deleteSession(Auth::user()->id);

        Response::redirect(url('login'));
    }

}