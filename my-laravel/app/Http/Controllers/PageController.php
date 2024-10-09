<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function blog()
    {
        return view('pages.blog');
    }
    public function showBlogPost($id)
    {
        $posts = [
            1 => 'Пост 1',
            2 => 'Пост 2',
            3 => 'Пост 3'
        ];

        $post = $posts[$id] ?? 'Пост не знайдено';
        return view('pages.blogs.blog-post', ['post' => $post]);
    }

    public function page1()
    {
        return view('protected.page1');
    }

    public function page2()
    {
        return view('protected.page2');
    }
}

