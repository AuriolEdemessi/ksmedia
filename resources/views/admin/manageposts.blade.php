@extends('layouts.admin')

@section('content')



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

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="my-4">Manage Posts</h1>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img src="{{ asset('storage/' . $post->cover) }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
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






@endsection
