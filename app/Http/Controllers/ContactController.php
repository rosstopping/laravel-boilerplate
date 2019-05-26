<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SEO;

class ContactController extends Controller
{
	public function __construct()
	{
        $this->middleware('doNotCacheResponse');
	}


    public function __invoke()
    {
    	SEO::setTitle('Contact Us');
    	SEO::setDescription('');

    	return view('contact');
    }
}