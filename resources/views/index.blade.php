@extends('layouts.admin')

@section('content')



  <div class="offcanvas-wrap">
    <section class="split">
      <div class="container">
        <div class="row justify-content-between">

          @include('layouts.aside')

          <div class="col-lg-9 split-content">


            <div class="row">
              <div class="col-lg-12">
                <h1>Add a new project</h1>
                <div class="alert alert-primary mb-0" role="alert">
                  Please update your notification settings. &nbsp;  &nbsp; &nbsp; &nbsp; <a href="/create"
            class="btn btn-primary ms-2">
           Create new project
          </a>


                </div><hr>
                
              </div>
            </div>

            <div class="container" style="margin-top: 50px;">

            <h3 class="fs-4">Projects</h3>

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Cover</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ($posts as $post)
                 <tr>
                       <th scope="row">{{ $post->id }}</th>
                       <td>{{ $post->title }}</td>
                       <td>{{ $post->author }}</td>
                       <td>{{ $post->body }}</td>
                       <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                       <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a></td>
                       <td>
                           <form action="/delete/{{ $post->id }}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>

                   </tr>
                   @endforeach

                </tbody>
              </table>
        </div>

            <!-- projects -->
            


            <!-- profile -->
            


            <!-- notifications -->
            

            <!-- password -->
            

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
     
 </div>

@endsection
