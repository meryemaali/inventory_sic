@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Crédit Entités</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="{{ route('credit.entity.print.pdf') }}" target="_blank" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-print"> Print Credit Customer  </i></a> <br>  <br>               

                    <h4 class="card-title">Crédit Entités  </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Entité</th> 
                            <th>Facture N° </th>
                            <th>Date</th>
                            <th>Montant restant</th> 
                            <th>Action</th>

                        </thead>


                        <tbody>

                        	@foreach($allData as $key => $item)
    <tr>
        <td> {{ $key+1}} </td>
        <td> {{ $item['entity']['name'] }} </td> 
        <td> #{{ $item['invoice']['invoice_no'] }}   </td> 
        <td> {{  date('d-m-Y',strtotime($item['invoice']['date'])) }} </td> 
        <td> {{ $item->due_amount }} </td> 
        <td>
   <a href="{{ route('entity.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route('entity.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

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
