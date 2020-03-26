@extends('layouts.app')
@section('title' , 'Liste des ' . 'Users')
@section('main-title' , 'Liste des ' . 'Users')
@section('breadcrumb')
    <li class="breadcrumb-item main-form">
        <a>
            Liste des Users
        </a>
    </li>
@endsection

@section('content')
@include('flash::message')
<div class="card">
    <div class="card-body">
        @include('admin.users.table')
    </div>
</div>
@endsection

