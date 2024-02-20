<?php

class BlogController extends Controller
{
    use Validator;

    public function index()
    {
        Auth::protect();

        return view('blog.php');
    }

}