<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Entity;
use Auth;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    
    public function ProductAll(){

        $products = Product::latest()->get();
        return view('backend.product.product_all',compact('products'));

    } // End Mehtod 

    public function ProductAdd(){

        $supplier = Supplier::all();
        $category = Category::all();
        $entity = Entity::all();
        return view('backend.product.product_add',compact('supplier','category','entity'));
    } // End Method 

    public function ProductStore(Request $request){

        Product::insert([

            'category_id' => $request->category_id,
            'name' => $request->name,
            'serial_number' => $request->serial_number ,
            'supplier_id' => $request->supplier_id,
            'quantity' => $request->quantity,
            'min_quantity' => $request->min_quantity,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Produit ajouté avec succès', 
            'alert-type' => 'success'
        );

        return redirect()->route('product.all')->with($notification); 

    } // End Method 

    public function ProductEdit($id){

        $supplier = Supplier::all();
        $category = Category::all();
        $entity = Entity::all();
        $product = Product::findOrFail($id);
        return view('backend.product.product_edit',compact('product','supplier','category','entity'));
    } // End Method 



    public function ProductUpdate(Request $request){

        $product_id = $request->id;

         Product::findOrFail($product_id)->update([

            
            'category_id' => $request->category_id,
            'name' => $request->name,
            'serial_number' => $request->serial_number ,
            'supplier_id' => $request->supplier_id,
            'quantity' => $request->quantity,
            'min_quantity' => $request->min_quantity,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Mise à jour produit réussie', 
            'alert-type' => 'success'
        );

        return redirect()->route('product.all')->with($notification); 


    } // End Method 

    public function ProductDelete($id){

        Product::findOrFail($id)->delete();
             $notification = array(
             'message' => 'Produit supprimé avec succès', 
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification); 
 
     } // End Method 

}
