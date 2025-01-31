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

                                <h3 class="fs-4">Edit Post</h3>

                                <div class="card bg-opaque-white">
                                    <div class="card-body bg-white">

                                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="row g-2 g-lg-3">
                                            @csrf
                                            @method('PUT')
                                            
                                            <div class="col-md-12">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control" rows="4" required>{{ $post->description }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label for="cover" class="form-label">Post Cover</label>
                                                <input type="file" name="cover" class="form-control">
                                                @if($post->cover)
                                                    <img src="{{ $post->cover }}" alt="{{ $post->title }}" class="img-thumbnail mt-2" width="150">
                                                @endif
                                                @error('cover')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <label for="images" class="form-label">Other Post Images</label>
                                                <input type="file" name="images[]" class="form-control" multiple>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">Team Members Involved</label>
                                                <div id="members-container">
                                                    @foreach($post->members as $member)
                                                        <div class="member-entry row mb-2">
                                                            <div class="col-md-5">
                                                                <input type="text" name="members[]" class="form-control" placeholder="Member Name" value="{{ $member->name }}">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="roles[]" class="form-control" placeholder="Role" value="{{ $member->pivot->role }}">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button" class="btn btn-danger remove-member">Remove</button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <button type="button" id="add-member" class="btn btn-secondary mt-2">Add Member</button>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Update</button>
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
    document.getElementById('add-member').addEventListener('click', function() {
        const container = document.getElementById('members-container');
        const entry = document.createElement('div');
        entry.classList.add('member-entry', 'row', 'mb-2');
        entry.innerHTML = `
            <div class="col-md-5">
                <input type="text" name="members[]" class="form-control" placeholder="Member Name">
            </div>
            <div class="col-md-5">
                <input type="text" name="roles[]" class="form-control" placeholder="Role">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-member">Remove</button>
            </div>
        `;
        container.appendChild(entry);
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-member')) {
            e.target.closest('.member-entry').remove();
        }
    });
</script>
@endsection
