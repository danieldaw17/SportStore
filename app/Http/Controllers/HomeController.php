<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sub_category;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
       $categorias=Category::all();
       $subcategorias=Sub_category::all();
       return view('partials.index',array('categorias' =>$categorias ,'subcategorias'=>$subcategorias) );
    }

     public function category($id){
       $categorias=Category::all();
       $subcategorias=Sub_category::all();
       return view('partials.index',array('categorias' =>$categorias ,'subcategorias'=>$subcategorias) );
     }
}
