@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Bons à approuver</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <a href="{{ route('invoice.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Ajouter Bon </i></a> <br>  <br> 

                    <h4 class="card-title">Bons de sortie </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            
                            
                            <th>Sl</th>
                            <th>Entité</th> 
                            <th>N° Bon sortie</th>
                            <th>Date </th>
                            <th>Description</th>  
                            <th>Statut</th>
                            <th>Action</th>

                        </thead>


                        <tbody>

                        	@foreach($allData as $key => $item)
            <tr>
                <td> {{ $key+1}} </td>
                <td> {{ $item['payment']['entity']['name'] }} </td> 
                <td> #{{ $item->invoice_no }} </td> 
                <td> {{ date('d-m-Y',strtotime($item->date))  }} </td> 


                 <td>  {{ $item->description }} </td> 


                 <td> @if($item->status == '0')
                    <span class="btn btn-warning">En attente</span>
                    @elseif($item->status == '1')
                    <span class="btn btn-success">Approuvé</span>
                    @endif </td>

      <td>
       @if($item->status == '0')
 <a href="{{ route('invoice.approve',$item->id) }}" class="btn btn-dark sm" title="Approved Data" >  <i class="fas fa-check-circle"></i> </a>

<a href="{{ route('invoice.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
@endif  
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