<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracast\Flash\Flash;
use App\Http\Requests;
use App\Service;
use App\Serviceimage;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{

    public function index(Request $request){

      $services = Service::Search($request->get('title'))->orderBy('id', 'DESC')->paginate(5);
      $services->each(function($services){
      $services->user;
      });
      return view('admin.services.index')->with('services', $services);
    }

    public function create(){

      return view('admin.services.create');

    }

    public function store(Request $request)
  {
    //Manipulacion de imagenes



    $service = new Service($request->all());
    $service->user_id = \Auth::user()->id;
    $service->save();


    $image = new Serviceimage();
    $image->name = $name;
    $image->service()->associate($service);
    $image->save();


    flash('Se ha creado el Servicio ' . $service->title . ' de forma exitosa', 'success')->important();
    return redirect()->route('services.index');
  }

  public function edit($id){
    $services = Service::find($id);

    return view('admin.services.edit')
        ->with('services', $services);
  }

  public function update(Request $request, $id){
    $services = Service::find($id);
    $services->fill($request->all());
    $services->save();


    flash("El Servicio " . $services->name . " Ha sido Editado de forma exitosa!", 'success')->important();
    return redirect()->route('services.index');
  }

  public function destroy($id){
      $service = Service::find($id);
      $service->delete();

      flash("EL Servicio " . $service->name . " Ha sido eliminado de forma exitosa!", 'danger')->important();
      return redirect()->route('services.index');
  }

}
