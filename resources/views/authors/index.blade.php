<!-- resources/views/authors/index.blade.php -->


@extends('layouts.admin')

@section('content')



  <div class="offcanvas-wrap">
    <section class="split">
      <div class="container">
        <div class="row justify-content-between">

          @include('layouts.aside')

          <div class="col-lg-9 split-content">

          <h1 class="my-4">Manage Authors</h1>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

            
            <div class="container">
            @foreach($authors as $author)
              <div class="row g-0 ">
                
              <div class="col-md-12">
            
            <a href="{{ route('authors.create') }}" class="btn btn-primary mb-2">Add New Author</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>
                            <!--<a href="{{ route('authors.show', $author->id) }}" class="btn btn-info btn-sm">View</a>-->
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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



