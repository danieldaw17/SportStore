<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sub_category;
use App\Category;
class indexController extends Controller
{
    public function getCategorias(){
      $categoriesNav=Category::all();
      $sub_categoriesNav=Sub_category::all();
      return view('partials.index', array('categoriesNav'=> $categoriesNav,'sub_categoriesNav'=>$sub_categoriesNav));
    }
}