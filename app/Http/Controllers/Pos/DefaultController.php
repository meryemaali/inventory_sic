<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Entity;
use App\Models\Category;
use App\Models\ProductEtat;
use Auth;
use Illuminate\Support\Carbon;


class DefaultController extends Controller
{
    public function GetCategory(Request $request){

        $supplier_id = $request->supplier_id;
        // dd($supplier_id);
        $allCategory = Product::with(['category'])->select('category_id')->where('supplier_id',$supplier_id)->groupBy('category_id')->get();
        return response()->json($allCategory);
    } // End Mehtod 

    public function GetProduct(Request $request){

        $category_id = $request->category_id; 
        $allProduct = Product::where('category_id',$category_id)->get();
        return response()->json($allProduct);
    } // End Mehtod 

    public function GetProductEtat(Request $request){

        $category_id = $request->category_id; 
        $allProduct = Product::where('category_id',$category_id)->get();
        return response()->json($allProduct);
    } // End Mehtod 

    public function GetProductNum(Request $request){

        $product_id = $request->product_id;
        $allProduct = Product::where('id',$product_id)->get();
        return response()->json($allProduct);
    } // End Mehtod 
}
