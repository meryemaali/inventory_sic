<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\SecteurType;
use Auth;
use Illuminate\Support\Carbon;

class EntityController extends Controller
{
    public function EntityAll(){

        $entities = Entity::latest()->get();
       return view('backend.entity.entity_all',compact('entities'));

   } // End Method

   public function EntityAdd(){
    $secteurs = SecteurType::orderBy('secteur','ASC')->whereNotNull('secteur')->get();
    $types = SecteurType::orderBy('type','ASC')->whereNotNull('type')->get();
    return view('backend.entity.entity_add',compact('secteurs','types'));
   }    // End Method

   public function EntityStore(Request $request){

    Entity::insert([
        'secteur' => $request->secteur,
        'base_rattachement' => $request->base_rattachement,
        'type' => $request->type,
        'name' => $request->name,
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),

    ]);

     $notification = array(
        'message' => 'Entité ajoutée avec succès', 
        'alert-type' => 'success'
    );

    return redirect()->route('entity.all')->with($notification);

} // End Method

public function EntityEdit($id){

    $entity = Entity::findOrFail($id);
    $secteurs = SecteurType::orderBy('secteur','ASC')->whereNotNull('secteur')->get();
    $types = SecteurType::orderBy('type','ASC')->whereNotNull('type')->get();
    return view('backend.entity.entity_edit',compact('entity','secteurs','types'));

 } // End Method


 public function EntityUpdate(Request $request){

     $entity_id = $request->id;


     Entity::findOrFail($entity_id)->update([
        'secteur' => $request->secteur,
        'base_rattachement' => $request->base_rattachement,
        'type' => $request->type,
        'name' => $request->name,
        'updated_by' => Auth::user()->id,
        'updated_at' => Carbon::now(),

     ]);

      $notification = array(
         'message' => 'Entité modifiée avec succès', 
         'alert-type' => 'success'
     );

     return redirect()->route('entity.all')->with($notification);
     

 } // End Method

 public function EntityDelete($id){

    $entities = Entity::findOrFail($id);
    

    Entity::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Entité supprimée avec succès', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

} // End Method

}
