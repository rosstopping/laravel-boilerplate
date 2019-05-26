<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;

use Wink\WinkPost;
use Wink\WinkPage;

use View;

use SEO;

class BlogController extends Controller
{
    public function index()
    {
		$posts = WinkPost::live()
			->orderBy('publish_date', 'DESC')
			->paginate(12);

		SEO::setTitle('Blog');
		SEO::setDescription('');

		return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
		$post = WinkPost::live()
			->whereSlug($slug)
			->firstOrFail();

		SEO::setTitle($post->title);
		SEO::setDescription($post->meta['meta_description']);

		return view('blog.show', compact('post'));
    }

    public function page($slug)
    {
		$page = WinkPage::whereSlug($slug)
			->firstOrFail();

		SEO::setTitle($page->title);
		SEO::setDescription($page->meta['meta_description']);

		if (View::exists('templates.page.'.$page->slug)) return view('templates.page.'.$page->slug, compact('page')); 

		return view('page.show', compact('page'));
    }
}
