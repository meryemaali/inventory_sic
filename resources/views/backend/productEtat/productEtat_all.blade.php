@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Etat Matériel MR</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="{{ route('productEtat.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle">Ajouter Etat </i> </a> <br>  <br>               

                    <h4 class="card-title">Matériels unités MR</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            
                            <!-- <th>Secteur</th> 
                            <th>Base </th>
                            <th>Type unité</th>  -->
                            <th>unité </th>
                            <th>Article</th>
                            <th>Désignation</th>
                            <th>N/S</th>
                            <th>Service</th>
                            <th>Etat</th>
                            <th>Réf av</th>
                            <th>Réf irr</th>
                            <th>Réf remise</th>
                            <th>Action</th>

                        </thead>


                        <tbody>

                        	@foreach($productEtats as $key => $item)
                        <tr>
                        <!-- <td> {{ $item->secteur }} </td>
                        <td> {{ $item->base_rattachement  }} </td> 
                            <td> {{ $item->type }} </td>  -->
                            <td> {{ $item['entity']['name'] }} </td> 
                             <td> {{ $item['category']['name'] }} </td> 
                             <td> {{ $item['product']['name'] }} </td> 
                              <td> {{ $item['product']['serial_number'] }} </td>
                              <td> {{ $item->service  }} </td> 
                              <td> {{ $item->etat  }} </td> 
                              <td> {{ $item->ref_avarie  }} </td> 
                              <td> {{ $item->ref_irreparable  }} </td> 
                              <td> {{ $item->ref_remise  }} </td> 
                               
                            <td>
   <a href="{{ route('productEtat.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route('productEtat.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

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