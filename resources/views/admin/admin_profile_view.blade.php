@extends('admin.admin_master')
@section('admin')



<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-6">

    <!-- Simple card -->
    <div class="card"><br></br>
        <!-- <center>
        <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-1.jpg') }}" alt="Card image cap">
        </center> -->
        <div class="card-body">
            <h4 class="card-title">Nom : {{ $adminData->firstname }}</h4>
            <hr>
            <h4 class="card-title">Prénom : {{ $adminData->lastname }}</h4>
            <hr>
            <h4 class="card-title">Matricule : {{ $adminData->matricule }}</h4>
            <hr>
            <h4 class="card-title">Username : {{ $adminData->username }}</h4>
            <hr>
            <h4 class="card-title">Email : {{ $adminData->email }}</h4>
            <hr>

            <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light">Modifier profil </a>
        </div>
    </div>

</div><!-- end col -->
        
                            
        
        
                           
</div>

</div>

@endsection