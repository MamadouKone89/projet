@extends('layouts.app')
@section('title' , 'Créer un User')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{!! route('admin.users.index') !!}">
            Liste des Users
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a>Créer un User</a>
    </li>
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header card-primary">
                <h3 class="card-title card-primary__title">Créer un User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form 
                method="POST"
                class = "main-form" role="form" action = "{!! route('admin.users.store') !!}"
                id = "create-User-form">
                {!! csrf_field() !!}
                <div class="card-body row">
                    @include('admin.users.fields')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Valider</button>
                    <a href = "{!! route('admin.users.index') !!}"
                        type="submit" class="btn btn-primary">
                        Retourner à liste des Users
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
