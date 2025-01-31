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
                                <h3 class="fs-4">Create a new post</h3>

                                <div class="card bg-opaque-white">
                                    <div class="card-body bg-white">
                                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="row g-2 g-lg-3">
                                            @csrf

                                            <!-- Title -->
                                            <div class="col-md-12">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>

                                            <!-- Type -->
                                            <div class="col-md-12">
                                                <label for="type" class="form-label">Type</label>
                                                <select name="type" class="form-select" required>
                                                    <option value="artwork">Artwork</option>
                                                    <option value="exhibition">Exhibition</option>
                                                </select>
                                            </div>

                                            <!-- Category -->
                                            <div class="col-md-12">
                                                <label for="category_id" class="form-label">Category</label>
                                                <select id="category_id" name="category_id" class="form-select" required>
                                                    <option value="">Sélectionner une catégorie</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Authors -->
                                            <div class="col-md-12">
                                                <label for="author_id" class="form-label">Authors</label>
                                                <select name="author_id[]" class="form-select" multiple required>
                                                    @foreach($authors as $author)
                                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Team Members & Roles -->
                                            <div class="col-md-12">
                                                <label for="team_members" class="form-label">Team Members Involved</label>

                                                <!-- Button to add more members -->
                                                <button type="button" class="btn btn-secondary mb-3" id="add-member-btn">Add Member</button>

                                                <div id="team-members-container">
                                                    <div class="team-member-row mb-2 d-flex">
                                                        <select name="team_members[]" class="form-select me-2" required>
                                                            <option value="">Select Member</option>
                                                            @foreach($teamMembers as $member)
                                                                <option value="{{ $member->id }}">{{ $member->name }}</option>
                                                            @endforeach
                                                        </select>

                                                        <select name="roles[]" class="form-select" required>
                                                            <option value="">Select Role</option>
                                                            @foreach($roles as $role)
                                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                            @endforeach
                                                        </select>

                                                        <button type="button" class="btn btn-danger ms-2 remove-member-btn">Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Description -->
                                            <div class="col-md-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control" required></textarea>
                                            </div>

                                            <!-- Cover -->
                                            <div class="col-md-12">
                                                <label for="cover" class="form-label">Cover</label>
                                                <input type="file" name="cover" class="form-control" required>
                                            </div>

                                            <!-- Additional Photos/Videos -->
                                            <div class="col-md-12">
                                                <label for="photos" class="form-label">Additional Photos/Videos</label>
                                                <input type="file" name="photos[]" class="form-control" multiple>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Create Post</button>
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

@section('scripts')
<script>
    document.getElementById('add-member-btn').addEventListener('click', function() {
        const container = document.getElementById('team-members-container');

        const memberRow = document.createElement('div');
        memberRow.classList.add('team-member-row', 'mb-2', 'd-flex');

        memberRow.innerHTML = `
            <select name="team_members[]" class="form-select me-2" required>
                <option value="">Select Member</option>
                @foreach($teamMembers as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
            <select name="roles[]" class="form-select" required>
                <option value="">Select Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <button type="button" class="btn btn-danger ms-2 remove-member-btn">Remove</button>
        `;

        container.appendChild(memberRow);

        // Add event listener to remove button
        memberRow.querySelector('.remove-member-btn').addEventListener('click', function() {
            memberRow.remove();
        });
    });

    // Remove member row
    document.querySelectorAll('.remove-member-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            button.parentElement.remove();
        });
    });
</script>
@endsection
