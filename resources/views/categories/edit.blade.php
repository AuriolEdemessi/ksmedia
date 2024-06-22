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

                                <h3 class="fs-4">Edit Category</h3>

                                <div class="card bg-opaque-white">
                                    <div class="card-body bg-white">

                                        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="row g-2 g-lg-3">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-12">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
