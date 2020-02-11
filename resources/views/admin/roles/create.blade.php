@extends('layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
       CREATION DES ROLES
    </div>

    <div class="card-body">
        <form action="{{ route("admin.roles.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Nom du role*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                   
                </p>
            </div>
            
            <div>
                <input class="btn btn-danger" type="submit" value="Enregistrer">
            </div>
        </form>


    </div>
</div>
@endsection