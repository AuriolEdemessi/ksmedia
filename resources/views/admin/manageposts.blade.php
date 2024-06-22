@extends('layouts.admin')

@section('content')



  <div class="offcanvas-wrap">
    <section class="split">
      <div class="container">
        <div class="row justify-content-between">

          @include('layouts.aside')

          <div class="col-lg-9 split-content">

          <h1 class="my-4">Manage Posts</h1>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

            
            <div class="container">
            @foreach($posts as $post)
              <div class="row g-0 bg-white">
                <div class="col-lg-6 order-lg-2 position-relative">
                  <span class="background" style="background-image: url('{{ $post->cover }}')"></span>
                </div>
                <div class="col-lg-6 p-4 p-md-10 order-lg-1">
                  <h3 class="fw-bold">{{ $post->title }}</h3>
                  <p class="fs-lg text-secondary">{{ $post->description }}</p>
                  <div class="row">
                    <div class="col-md-6">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="col-md-6">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                     </form>
                    </div>
                  </div>
                </div>
              </div>

              <br><hr>
            @endforeach
            </div>
         

            


            <!-- notifications -->
            

            <!-- password -->
            

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
     
 </div>

@endsection


