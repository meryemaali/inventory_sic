@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Modifier Produit </h4><br><br>



 <form method="post" action="{{ route('productEtat.update') }}" id="myForm" >
                @csrf

                <input type="hidden" name="id" value="{{ $productEtat->id }}">

          
  <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Unité </label>
        <div class="col-sm-10">
            <select name="entity_id" class="form-select" aria-label="Default select example">
                <option selected="">Choisir une unité</option>
                @foreach($entity as $ent)
                <option value="{{ $ent->id }}"{{ $ent->id == $productEtat->entity_id ? 'selected' : '' }}>{{ $ent->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row --> 
  <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Catégorie </label>
        <div class="col-sm-10">
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option selected="">Choisir la catégorie du produit</option>
                @foreach($category as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $productEtat->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->
  <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Désignation </label>
        <div class="col-sm-10">
            <select name="product_id" class="form-select" aria-label="Default select example">
                <option selected="">Choisir désigantion article</option>
                @foreach($product as $pro)
                <option value="{{ $pro->id }}" {{ $pro->id == $productEtat->product_id ? 'selected' : '' }}>{{ $pro->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
    <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> N/S </label>
                <div class="form-group col-sm-10">
                    <input name="serial_number" value="{{ $product->serial_number }}" class="form-control" type="text"    >
                </div>
            </div>

  <!-- end row -->
  <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service </label>
                <div class="form-group col-sm-10">
                    <input name="service" value="{{ $productEtat->service }}" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Etat </label>
                <div class="form-group col-sm-10">
                <select name="etat" class="form-select" aria-label="Default select example">
            <option value="{{ $productEtat->id }}" {{ $productEtat->id == $productEtat->etat ? 'selected' : '' }}>{{ $productEtat->etat }}</option>
            <option value="AV">AV</option>
            <option value="AVR">AVR</option>
            <option value="BF">BF</option>
            <option value="IRR">IRR</option>
            <option value="REMISE">REMISE</option>
        
            </select>
                </div>
            </div>
            <!-- end row -->


            
  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Référence avarie </label>
                <div class="form-group col-sm-10">
                    <input name="ref_avarie" value="{{ $productEtat->ref_avarie }}" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Référence irréparable </label>
                <div class="form-group col-sm-10">
                    <input name="ref_irreparable" value="{{ $productEtat->ref_irreparable }}"  class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Référence remise </label>
                <div class="form-group col-sm-10">
                    <input name="ref_remise" value="{{ $productEtat->ref_remise }}"  class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
  


<input type="submit" class="btn btn-info waves-effect waves-light" value="Modifier Etat Produit">
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
                entity_id: {
                    required : true,
                },
                category_id: {
                    required : true,
                },
                product_id: {
                    required : true,
                }, 
                serial_number: {
                    required : true,
                },
                 service: {
                    required : true,
                },
                 etat: {
                    required : true,
                },
            },
            messages :{
                entity_id: {
                    required : 'Veuillez choisir une entité',
                },
                category_id: {
                    required : 'Veuillez choisir la catégorie',
                },
                product_id: {
                    required : 'Veuillez choisir la désignation du produit',
                },
                serial_number: {
                    required : 'Veuillez choisir le numéro de série du produit',
                },
                service: {
                    required : 'Veuillez indiquer le service',
                },
                etat: {
                    required : 'Veuillez choisir état du produit',
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