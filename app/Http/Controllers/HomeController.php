<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Illuminate\Support\Facades\Cache;

use SEO;

class HomeController extends Controller
{
    public function __invoke()
    {

        SEO::setTitle('Home');
        SEO::setDescription('');

    	return view('index');
    }
}
