<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::latest()->paginate(5);
        return view('products',compact('products'));
    }
    function store(Request $request){
        $request->validate(
            [
            'name'=>'required|unique:products',
            'price'=>'required',
            ],
            [
            'name.required'=>'Name Is Requried',
            'name.unique'=>'Name Is Unique',
            'price.required'=>'Price Is Required',
            ],
        );
        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->save();
        return response()->json([
            'status'=>'success'
        ]);

    }

    function update(Request $request){
        $request->validate(
            [
            'name'=>'required|unique:products,name,'.$request->id,
            'price'=>'required',
            ],
            [
            'name.required'=>'Name Is Requried',
            'name.unique'=>'Name Is Unique',
            'price.required'=>'Price Is Required',
            ],
        );
       Product::where('id',$request->id)->update([
        'name'=>$request->name,
        'price'=>$request->price,
       ]);
        return response()->json([
            'status'=>'success'
        ]);
    }

    function delete(Request $request){
        Product::find($request->id)->delete();
        return response()->json([
            'status'=>'success'
        ]);
    }
}
