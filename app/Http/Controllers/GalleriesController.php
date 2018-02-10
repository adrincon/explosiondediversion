<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Galleryimage;

class GalleriesController extends Controller
{

    public function index(){

      $galleries = Gallery::orderBy('id', 'DESC')->paginate(5);
      return view('admin.galleries.index')->with('galleries', $galleries);
    }

    public function create(){
      return view('admin.galleries.create');
    }

    public function store(Request $request){

      //Manipulacion de imagenes

      if ($request->file('image')) {
        $file = $request->file('image');
        $name = 'explosion_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '\images\galleries';
        $file->move($path, $name);
      }


      $galleries = new Gallery($request->all());
      $galleries->save();

      $image = new Galleryimage();
      $image->name = $name;
      $image->gallery()->associate($gallery);
      $image->save();


      return redirect()->route('galleries.index');
    }

}
