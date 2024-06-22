@extends('layouts.admin')

@section('content')

<div class="offcanvas-wrap">
    <section class="split">
        <div class="container">
            <div class="row justify-content-between">

                @include('layouts.aside')

                <div class="col-lg-9 split-content">

                    <section>
                        <div class="row">
                            <div class="col-lg-10">

                                <h3 class="fs-4">Edit Team Member</h3>

                                <div class="card bg-opaque-white">
                                    <div class="card-body bg-white">

                                        <form method="POST" action="{{ route('team.update', $teamMember->id) }}" enctype="multipart/form-data" class="row g-2 g-lg-3">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-12">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $teamMember->name }}" required>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="role" class="form-label">Role</label>
                                                <input type="text" name="role" class="form-control" id="role" value="{{ $teamMember->role }}" required>
                                                @error('role')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control" id="description">{{ $teamMember->description }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                                <input type="file" name="profile_picture" class="form-control" id="profile_picture">
                                                @if($teamMember->profile_picture)
                                                    <img src="{{ $teamMember->profile_picture }}" alt="Profile Picture" width="100">
                                                @endif
                                                @error('profile_picture')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Update Member</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
