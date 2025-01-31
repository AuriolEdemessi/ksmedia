@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Edit Role</h2>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nom du rôle -->
        <div class="mb-3">
            <label for="name" class="form-label">Role Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" required>
        </div>

        <!-- Associer un membre de l'équipe -->
        <div class="mb-3">
            <label for="team_member_id" class="form-label">Assign a Team Member</label>
            <select id="team_member_id" name="team_member_id" class="form-select">
                <option value="">Select a Member</option>
                @foreach($teamMembers as $member)
                    <option value="{{ $member->id }}" 
                        {{ $role->teamMembers->contains($member->id) ? 'selected' : '' }}>
                        {{ $member->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>
</div>
@endsection
