@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Modifier une entité </h4><br><br>



    <form method="post" action="{{ route('entity.update') }}" id="myForm" enctype="multipart/form-data" >
                @csrf

            <input type="hidden" name="id" value="{{ $entity->id }}">
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Secteur </label>
                <div class="form-group col-sm-10">
                <select name="secteur" class="form-select" aria-label="Default select example">
            <option selected="">Choisir un secteur</option>
            @foreach($secteurs as $sec)
            <option value="{{ $sec->secteur }}" {{ $sec->secteur == $entity->secteur ? 'selected' : '' }} >{{ $sec->secteur }}</option>
            @endforeach
            </select>
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Base rattachement </label>
                <div class="form-group col-sm-10">
                    <input name="base_rattachement" value="{{ $entity->base_rattachement }}"class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Type entité </label>
                <div class="form-group col-sm-10">
                <select name="type" class="form-select" aria-label="Default select example">
            <option selected="">Choisir un type</option>
            @foreach($types as $t)
            <option value="{{ $t->type }}" {{ $t->type == $entity->type ? 'selected' : '' }} >{{ $t->type }}</option>
            @endforeach
            </select>
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Entité</label>
                <div class="form-group col-sm-10">
                    <input name="name" value="{{ $entity->name }}" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->






<input type="submit" class="btn btn-info waves-effect waves-light" value="Modifier entité">
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
                name: {
                    required : true,
                }, 
                 mobile_no: {
                    required : true,
                },
                 email: {
                    required : true,
                },
                 address: {
                    required : true,
                },
                 
            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },
                mobile_no: {
                    required : 'Please Enter Your Mobile Number',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                address: {
                    required : 'Please Enter Your Address',
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


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



@endsection 