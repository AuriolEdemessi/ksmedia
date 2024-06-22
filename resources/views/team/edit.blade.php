@extends('layouts.admin2')

@section('content')
<div class="container">
    <h1>Edit Team Member</h1>
    <form method="POST" action="{{ route('team-members.update', $teamMember) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $teamMember->name }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $teamMember->description }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="profile_picture">Profile Picture</label>
            <input type="file" name="profile_picture" class="form-control" id="profile_picture">
            @if($teamMember->profile_picture)
                <img src="{{ $teamMember->profile_picture }}" alt="Profile Picture" width="100">
            @endif
            @error('profile_picture')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Member</button>
    </form>
</div>
@endsection
