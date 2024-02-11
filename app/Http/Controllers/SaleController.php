<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index(){
        $sales = Sale::with('user')->with('product')->get();
        return view('orders', compact('sales'));
    }
    public function OrderProduct(Request $request){
        
        $validatData = $request->validate([
            'product_id' => "required",
            'price' => "required",
            'quantite' => "required",
            'previous_url'=>'required'
        ]);
        $sale = new Sale();
        $sale->user_id = session("user_id");
        $sale->product_id  = $validatData['product_id'];
        $sale->price = $validatData['price'];
        $sale->quantite = $validatData['quantite'];
        $sale->status = "pending";
        $sale->save();
        return redirect($request->previous_url);
    }
    public function orderdsUser($id){
        $sales = Sale::with('user')->with('product')->where('status','pending')->where('user_id',$id)->get();
        return view('user.myorders',compact('sales'));
    }
    public function Payment(Request $request){

    }
}
