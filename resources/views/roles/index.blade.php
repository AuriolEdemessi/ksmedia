@extends('layouts.admin')

@section('content')
    <h1>Liste des Rôles</h1>

    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Créer un Nouveau Rôle</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom du Rôle</th>
                <th>Membres Associés</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        @if($role->teamMembers->isEmpty())
                            <span class="text-muted">Aucun membre associé</span>
                        @else
                            <ul>
                                @foreach($role->teamMembers as $member)
                                    <li>{{ $member->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
