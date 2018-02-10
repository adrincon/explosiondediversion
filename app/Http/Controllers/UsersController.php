<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Laracast\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

    public function index(Request $request){

      $users = User::Search($request->get('name'))->orderBy('id', 'DESC')->paginate(5);
      return view('admin.users.index')->with('users', $users);
    }


    public function create(){
        return view('admin.users.create');
    }

    public function store(UserRequest $request){
      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();

      flash("Se ha registrado " . $user->name . " de forma exitosa!", 'success')->important();

      return redirect()->route('users.index');

}

    public function edit($id){
      $user = User::find($id);

      return view ('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id){

      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->type = $request->type;
      $user->save();

      flash("El Usuario " . $user->name . "Ha sido Editado con Exito!!", 'success')->important();

      return redirect()-> route('users.index');
    }



    public function destroy($id){
      $user = User::find($id);
      $user->delete();

      flash("El Usuario " . $user->name . " Ha sido eliminado de forma exitosa!", 'danger')->important();
      return redirect()->route('users.index');
    }

}
