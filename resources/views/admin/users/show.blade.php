@extends('layouts.app')
@section('title' , 'Détails User')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{!! route('admin.users.index') !!}">
            Liste des Users
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a>Détails</a>
    </li>
@endsection



@section('content')
    <div class="card">
        <div class="card-header card-primary">
            <h3 class="card-primary__title">Détails de User : </h3> 
        </div>

        <div class="card-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                        @include('admin.users.show_fields')
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{!! route('admin.users.index') !!}">
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>
@endsection

