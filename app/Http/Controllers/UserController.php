<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $users = User::with('role')->get();
        return view('users', compact('users'));
    }
    public function indexUser(){
        $categorys = Categorie::orderby('created_at','desc')->limit(4)->get();
        $products = Product::orderby('created_at','desc')->limit(4)->get();
        return view("user.index", compact('products','categorys'));
    }
    public function getAllProduct(){
        $categorys = Categorie::orderby('created_at','desc')->get();
        $products = Product::orderby('created_at','desc')->paginate(9);
        return view("user.allItems", compact('products','categorys'));
    }
    public function SearchProduct($search){
        if($search == "AllProductSearch") $products = Product::paginate(9);
        else $products = Product::where('name', 'like', "%$search%")->get();
        return view("user.search", compact('products'));
    }
    public function FilterProduct($search){
        if($search == "All") $products = Product::paginate(9);
        else $products = Product::where('category_id',$search)->get();
        return view("user.search", compact('products'));
    }
}
