@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Ajouter Produit </h4><br><br>



 <form method="post" action="{{ route('product.store') }}" id="myForm" >
                @csrf

                
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Article </label>
        <div class="col-sm-10">
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option selected=""></option>
                @foreach($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Désignation </label>
                <div class="form-group col-sm-10">
                    <input name="name" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


            <!-- <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">N/S </label>
                <div class="form-group col-sm-10">
                    <input name="serial_number" class="form-control" type="text"    >
                </div>
            </div> -->
            <!-- end row -->


            <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Fournisseur </label>
        <div class="col-sm-10">
            <select name="supplier_id" class="form-select" aria-label="Default select example">
                <option selected=""></option>
                @foreach($supplier as $supp)
                <option value="{{ $supp->id }}">{{ $supp->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->

      <!-- <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Entité </label>
        <div class="col-sm-10">
            <select name="entity_id" class="form-select" aria-label="Default select example">
                <option selected="">Choisir une entité</option>
                @foreach($entity as $ent)
                <option value="{{ $ent->id }}">{{ $ent->name }}</option>
               @endforeach
                </select>
        </div>
    </div> -->
  <!-- end row -->
  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Quantité </label>
                <div class="form-group col-sm-10">
                    <input name="quantity" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Quantité minimale </label>
                <div class="form-group col-sm-10">
                    <input name="min_quantity" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->



      


<input type="submit" class="btn btn-info waves-effect waves-light" value="Ajouter produit">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_id: {
                    required : true,
                },
                name: {
                    required : true,
                }, 
                
                 supplier_id: {
                    required : true,
                },
                
                 
            },
            messages :{
                category_id: {
                    required : 'Veuillez choisir la catégorie',
                },
                name: {
                    required : 'Veuillez saisir la désignation du produit',
                },
                
                supplier_id: {
                    required : 'Veuillez choisir le fournisseur',
                },
                
                
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>



@endsection 