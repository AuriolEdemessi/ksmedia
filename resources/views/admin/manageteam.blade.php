@extends('layouts.admin')

@section('content')

<div class="offcanvas-wrap">
    <section class="split">
        <div class="container">
            <div class="row justify-content-between">

                @include('layouts.aside')

                <div class="col-lg-9 split-content">

                    <h1 class="my-4">Manage Team Members</h1>
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="container">
                        @foreach($teamMembers as $teamMember)
                            <div class="row g-0 bg-white">
                                <div class="col-lg-6 order-lg-2 position-relative">
                                    <span class="background" style="background-image: url('{{ $teamMember->profile_picture_url }}')"></span>
                                </div>
                                <div class="col-lg-6 p-4 p-md-10 order-lg-1">
                                    <h3 class="fw-bold">{{ $teamMember->name }}</h3>
                                    <span>{{ $teamMember->role }}</span><hr>
                                    <p class="fs-lg text-secondary">{{ $teamMember->description }}</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('team.edit', $teamMember->id) }}" class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{ route('team.destroy', $teamMember->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this team member?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
