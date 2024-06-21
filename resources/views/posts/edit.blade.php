@extends('layouts.admin')

@section('content')



  <div class="offcanvas-wrap">
    <section class="split">
      <div class="container">
        <div class="row justify-content-between">

          @include('layouts.aside')

          <div class="col-lg-9 split-content">

            <section>

            <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Edit Post</h1>
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ $post->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="cover">Post Cover</label>
                    <input type="file" name="cover" class="form-control">
                    <img src="{{ $post->cover }}" alt="{{ $post->title }}" class="img-thumbnail mt-2" width="150">
                </div>
                <div class="form-group">
                    <label for="images">Other Post Images</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                </div>
                <button type="submit" class="btn btn-success mt-3">Update</button>
            </form>
        </div>
    </div>
</div>

              
            </section>


            <!-- notifications -->
            

            <!-- password -->
            

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
     
 </div>

@endsection




