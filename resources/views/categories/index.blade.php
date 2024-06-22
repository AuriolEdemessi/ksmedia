<!-- resources/views/categories/index.blade.php -->
<!-- resources/views/authors/index.blade.php -->


@extends('layouts.admin')

@section('content')



  <div class="offcanvas-wrap">
    <section class="split">
      <div class="container">
        <div class="row justify-content-between">

          @include('layouts.aside')

          <div class="col-lg-9 split-content">

          <h1 class="my-4">Manage Categories</h1>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

            
            <div class="container">
          
              <div class="row g-0 ">
                
              <div class="col-md-12">
            
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Add New Category</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <!--<a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>-->
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
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




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Categories</h2>
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Add New Category</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
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
</div>
@endsection
