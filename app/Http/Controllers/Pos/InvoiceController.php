<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Entity;
use App\Models\Category;
use DB;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Payment;
use App\Models\PaymentDetail;

class InvoiceController extends Controller
{
    public function InvoiceAll(){

        $allData = Invoice::orderBy('date','desc')->orderBy('id','desc')->get();
            return view('backend.invoice.invoice_all',compact('allData'));

    } // End Method

    public function invoiceAdd(){

        $category = Category::all();
        $entity = Entity::all();
        $invoice_data = Invoice::orderBy('id','desc')->first();
        if ($invoice_data == null) {
           $firstReg = '0';
           $invoice_no = $firstReg+1;
        }else{
            $invoice_data = Invoice::orderBy('id','desc')->first()->invoice_no;
            $invoice_no = $invoice_data+1;
        }
        $date = date('Y-m-d');
        return view('backend.invoice.invoice_add',compact('invoice_no','category','date','entity'));

    } // End Method

    public function InvoiceStore(Request $request){

        if ($request->category_id == null) {

           $notification = array(
            'message' => 'Veillez choisir un élément', 
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

        } else{
            if ($request->paid_amount > $request->estimated_amount) {

               $notification = array(
            'message' => 'Le montant payé est le maximum du prix total', 
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

            } else {

                $invoice = new Invoice();
    $invoice->invoice_no = $request->invoice_no;
    $invoice->date = date('Y-m-d',strtotime($request->date));
    $invoice->description = $request->description;
    $invoice->status = '0';
    $invoice->created_by = Auth::user()->id; 

    DB::transaction(function() use($request,$invoice){
        if ($invoice->save()) {
           $count_category = count($request->category_id);
           for ($i=0; $i < $count_category ; $i++) { 

              $invoice_details = new InvoiceDetail();
              $invoice_details->date = date('Y-m-d',strtotime($request->date));
              $invoice_details->invoice_id = $invoice->id;
              $invoice_details->category_id = $request->category_id[$i];
              $invoice_details->product_id = $request->product_id[$i];
              $invoice_details->selling_qty = $request->selling_qty[$i];
              $invoice_details->unit_price = $request->unit_price[$i];
              $invoice_details->selling_price = $request->selling_price[$i];
              $invoice_details->status = '1'; 
              $invoice_details->save(); 
           }

            if ($request->entity_id == '0') {
                $entity = new Entity();
                $entity->name = $request->name;
                $entity->save();
                $entity_id = $entity->id;
            } else{
                $entity_id = $request->entity_id;
            } 


           $payment = new Payment();
           $payment_details = new PaymentDetail();

           $payment->invoice_id = $invoice->id;
           $payment->entity_id = $entity_id;
           $payment->paid_status = $request->paid_status;
           $payment->discount_amount = $request->discount_amount;
           $payment->total_amount = $request->estimated_amount;

           if ($request->paid_status == 'full_paid') {
               $payment->paid_amount = $request->estimated_amount;
               $payment->due_amount = '0';
               $payment_details->current_paid_amount = $request->estimated_amount;
           } elseif ($request->paid_status == 'full_due') {
               $payment->paid_amount = '0';
               $payment->due_amount = $request->estimated_amount;
               $payment_details->current_paid_amount = '0';
           }elseif ($request->paid_status == 'partial_paid') {
               $payment->paid_amount = $request->paid_amount;
               $payment->due_amount = $request->estimated_amount - $request->paid_amount;
               $payment_details->current_paid_amount = $request->paid_amount;
           }
           $payment->save();

           $payment_details->invoice_id = $invoice->id; 
           $payment_details->date = date('Y-m-d',strtotime($request->date));
           $payment_details->save(); 
       } 

           }); 

       } // end else 
        }
        $notification = array(
            'message' => 'Données enregistrées avec succès', 
            'alert-type' => 'success'
        );
        return redirect()->route('invoice.all')->with($notification);  

    } // End Method


}
