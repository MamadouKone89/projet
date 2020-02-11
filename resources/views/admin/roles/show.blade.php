@extends('layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
        Detail du role
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                         ID
                        </th>
                        <td>
                            {{ $role->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Nom du role
                        </th>
                        <td>
                            {{ $role->name }}
                        </td>
                    </tr>
                    <tr>
                        
                        
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Retour à la liste
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection