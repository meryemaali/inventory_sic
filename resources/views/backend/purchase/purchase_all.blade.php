@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Tous les Achats</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="{{ route('purchase.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">Ajouter Achat </a> <br>  <br>               

                    <h4 class="card-title">Achats </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>N° Achat</th> 
                            <th>Date </th>
                            <th>Fournisseur</th>
                            <th>Categorie</th> 
                            <th>Qty</th> 
                            <th>Produit</th> 
                            <th>Status</th>
                            <th>Action</th>

                        </thead>


                        <tbody>

                        	@foreach($allData as $key => $item)
            <tr>
                <td> {{ $key+1}} </td>
                <td> {{ $item->purchase_no }} </td> 
                <td> {{ $item->date }} </td> 
                 <td> {{ $item->supplier_id }} </td> 
                 <td> {{ $item->category_id }} </td> 
                 <td> {{ $item->buying_qty }} </td> 
                 <td> {{ $item->product_id }} </td> 
                 <td> <span class="btn btn-warning">Pending</span> </td> 

                <td> 

<a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                </td>

            </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection