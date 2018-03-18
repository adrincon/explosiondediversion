<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Service;
use Carbon\Carbon;
use App\Category;

class FrontController extends Controller
{

      public function __construct()
      {
          Carbon::setLocale('es');
      }


      public function index()
      {
        $articles = Article::orderBy('id', 'DESC')->paginate(2);
        $articles->each(function($articles){
          $articles->category;
          $articles->images;
        });

        $services = Service::orderBy('id', 'DESC')->paginate(6);
        $services->each(function($services){
          $services->serviceimages;
        });

      return view('front.index')
          ->with('articles', $articles)
          ->with('services', $services);
    }

    public function viewArticle($slug)
    {
      $article = Article::findBySlugOrFail($slug);
      $article->category;
      $article->user;
      $article->image;

      return view('front.article')->with('article', $article);
    }

    public function viewService($slug)
    {
      $service = Service::findBySlugOrFail($slug);
      $service->user;
      $service->serviceimage;



      return view('front.service')->with('service', $service);
    }

    public function header()
    {

      $services = Service;


    return view('front.index')
        ->with('services', $services);
      }
  }
