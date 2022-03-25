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

}