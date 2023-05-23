@extends('admin.admin_master')
@section('admin')



<div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">SIC</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @php

$entities = App\Models\Entity::count();
$suppliers = App\Models\Supplier::count();
$categories = App\Models\Category::count();
$invoices = App\Models\Invoice::count();

$productEtats = App\Models\ProductEtat::get();
$products = App\Models\Product::select('quantity')->where('category_id',8)->get();
$allData = App\Models\Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();



@endphp
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Entités</p>
                                                <h4 class="mb-2">{{ $entities }}</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="ri-user-3-line font-size-24"></i> 
                                                <!-- <i class="ri-user-3-line font-size-24"></i>  -->
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Fournisseurs</p>
                                                <h4 class="mb-2">{{ $suppliers }}</h4>
                                                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Catégories</p>
                                                <h4 class="mb-2">{{ $categories }}</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Bons de sortie</p>
                                                <h4 class="mb-2">{{ $invoices }}</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                          
    
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <!-- <i class="mdi mdi-dots-vertical"></i> -->
                                            </a>
                                            
                                        </div>
    
                                        <h4 class="card-title mb-4">Etat Stock</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                    <th>Sl</th>
                                                    <th>Fournisseur </th>
                                                    <th>Catégorie</th> 
                                                    <th>Produit</th> 
                                                    <th>In Qté</th> 
                                                    <th>Out Qté </th>
                                                    <th>Stock </th>
                                                    </tr>
                                                </thead><!-- end thead -->
                                                <tbody>
                                                @foreach($allData as $key => $item)
                            @php
$buying_total = App\Models\Purchase::where('category_id',$item->category_id)->where('product_id',$item->id)->where('status','1')->sum('buying_qty');
$selling_total = App\Models\InvoiceDetail::where('category_id',$item->category_id)->where('product_id',$item->id)->where('status','1')->sum('selling_qty');
@endphp
                                                    <tr>
                                                    <td> {{ $key+1}} </td> 
        <td> {{ $item['supplier']['name'] }} </td> 
        <td> {{ $item['category']['name'] }} </td> 
        <td> {{ $item->name }} </td> 
        <td> <span class="btn btn-success"> {{ $buying_total  }}</span>  </td> 
        <td> <span class="btn btn-info"> {{ $selling_total  }}</span> </td> 
        <td> <span class="btn btn-danger"> {{ $item->quantity }}</span> </td> 

                                                    </tr>
                                                     <!-- end -->
                                                     @endforeach
                                                </tbody><!-- end tbody -->
                                            </table> <!-- end table -->
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                            
                        </div>
                        <!-- end row -->
                    </div>
                    
                </div>

@endsection