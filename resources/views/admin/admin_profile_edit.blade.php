@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>




<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Modifier profil</h4>

                <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                    @csrf
               <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input name="lastname" class="form-control" type="text" value="{{ $editData->lastname }}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                        <input name="firstname" class="form-control" type="text" value="{{ $editData->firstname }}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Matricule</label>
                    <div class="col-sm-10">
                        <input name="matricule" class="form-control" type="text" value="{{ $editData->matricule }}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input name="username" class="form-control" type="text" value="{{ $editData->username }}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" class="form-control" type="text" value="{{ $editData->email }}" id="example-text-input">
                    </div>
                </div>
                <!-- end row -->

                <input type="submit" class="btn btn-info waves-effect waves-light" value="Modifier">
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
        
                            
        
        
                           
</div>

</div>

@endsection