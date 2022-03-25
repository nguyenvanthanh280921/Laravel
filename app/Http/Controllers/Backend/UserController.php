<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $user = new User();
        $data = $user->paginate(5);
        return view('backend.user.index', compact('data'));
    }
    public function add(){
        $data = [];
        return view('backend.user.add', compact('data'));
    }
    public function edit($id){
        $user = user::find($id);
        return view('backend.user.edit',compact('user')); 
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
    public function save(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = new User();
        if(!empty($id)){
            $user = $user->find($id);
            $user->id = $id;
            $user->name = $name;
            $user->email = $email;
            $user->update();
        }else{
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
            $user->save();
        }
        return redirect('/user');


    }

}