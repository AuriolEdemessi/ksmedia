@extends('layouts.admin')

@section('content')



  <div class="offcanvas-wrap">
    <section class="split">
      <div class="container">
        <div class="row justify-content-between">

          @include('layouts.aside')

          <div class="col-lg-9 split-content">


            

            <!-- projects -->
            


            <!-- profile -->
            <section>

            <div class="row">


                
                <div class="col-lg-9">
                    <h3 class="text-center text-danger"><b>Add New Post</b> </h3>
				    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input type="text" name="title" class="form-control m-2" placeholder="title">
        				 <input type="text" name="author" class="form-control m-2" placeholder="author">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea>
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
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
