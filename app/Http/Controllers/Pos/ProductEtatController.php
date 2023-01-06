<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductEtat;
use App\Models\Product;
use App\Models\Category;
use App\Models\Entity;
use Auth;
use Illuminate\Support\Carbon;

class ProductEtatController extends Controller
{
    public function ProductEtatAll(){

        $productEtats = ProductEtat::latest()->get();
        return view('backend.productEtat.productEtat_all',compact('productEtats'));

    } // End Mehtod 

    public function ProductEtatAdd(){
        $entity = Entity::all();
        $category = Category::all();
        $product = Product::all();      
        $productName = Product::orderBy('name','desc')->distinct()->get('name');     
        return view('backend.productEtat.productEtat_add',compact('entity','category','product','productName'));
    } // End Method 

    public function ProductEtatStore(Request $request){

        ProductEtat::insert([

            'secteur' =>  `0`,
            'base_rattachement' => '0',
            'type' =>'0',
            'entity_id' => $request->entity_id,
            'category_id' => $request->category_id,
            'product_id' => $request->product_id ,
            'serial_number' => $request->serial_number,
            'service' => $request->service,
            'etat' => $request->etat,
            'ref_avarie' => $request->ref_avarie,
            'ref_irreparable' => $request->ref_irreparable,
            'ref_remise' => $request->ref_remise,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Produit ajouté avec succès', 
            'alert-type' => 'success'
        );

        return redirect()->route('productEtat.all')->with($notification); 

    } // End Method 

    public function ProductEtatEdit($id){

       
        $productEtat = ProductEtat::findOrFail($id);
        return view('backend.productEtat.productEtat_edit',compact('productEtat'));
    } // End Method 



    public function ProductEtatUpdate(Request $request){

        $productEtat_id = $request->id;

         ProductEtat::findOrFail($productEtat_id)->update([

            
            'category_id' => $request->category_id,
            'name' => $request->name,
            'serial_number' => $request->serial_number ,
            'supplier_id' => $request->supplier_id,
            'entity_id' => $request->entity_id,
            'quantity' => $request->quantity,
            'min_quantity' => $request->min_quantity,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Mise à jour produit réussie', 
            'alert-type' => 'success'
        );

        return redirect()->route('productEtat.all')->with($notification); 


    } // End Method 

    public function ProductEtatDelete($id){

        ProductEtat::findOrFail($id)->delete();
             $notification = array(
             'message' => 'Produit supprimé avec succès', 
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification); 
 
     } // End Method

}
