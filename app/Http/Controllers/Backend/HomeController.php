<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
    public function __contruct(){

    }
    public function index(){
        $data = [];
        return view('backend.home.index', compact('data'));
    }
}
?>
