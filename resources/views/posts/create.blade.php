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
                                            <div class="col-md-12">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="type" class="form-label">Type</label>
                                                <select name="type" class="form-select" required>
                                                    <option value="artwork">Artwork</option>
                                                    <option value="exhibition">Exhibition</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="category_id" class="form-label">Category</label>
                                                <select id="category_id" name="category_id" class="form-select" required>
                                                    <option value="">Sélectionner une catégorie</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="author_id" class="form-label">Authors</label>
                                                <select name="author_id[]" class="form-select" multiple required>
                                                    @foreach($authors as $author)
                                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control" required></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="cover" class="form-label">Cover</label>
                                                <input type="file" name="cover" class="form-control" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="photos" class="form-label">Additional Photos/Videos</label>
                                                <input type="file" name="photos[]" class="form-control" multiple>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Create Post</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

            <section>

            <div class="row">


                
            
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
