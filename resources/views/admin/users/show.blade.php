@extends('layouts.master')
@section('content')

<div class="card">
    <div class="card-header">
       DETAILS DE L'UTILISATEUR
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                          ID :
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NOM :
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Email :
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Roles
                        </th>
                        <td>
                            @foreach($user->roles()->pluck('name') as $role)
                                <span class="label label-info label-many">{{ $role }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                Retour à la liste
            </a>
        </div>


    </div>
</div>
@endsection