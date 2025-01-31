@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Create Role</h2>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf

        <!-- Nom du rôle -->
        <div class="mb-3">
            <label for="name" class="form-label">Role Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter role name" required>
        </div>

        <!-- Associer un membre de l'équipe -->
        <div class="mb-3">
            <label for="team_member_id" class="form-label">Assign a Team Member</label>
            <select id="team_member_id" name="team_member_id" class="form-select">
                <option value="">Select a Member</option>
                @foreach($teamMembers as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary">Create Role</button>
    </form>
</div>
@endsection
