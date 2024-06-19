@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>

    <h2>Cover</h2>
    <img src="{{ $post->getFirstMediaUrl('cover') }}" alt="Cover Image">

    <h2>Photos</h2>
    @foreach($post->getMedia('photos') as $photo)
        <img src="{{ $photo->getUrl() }}" alt="Photo">
    @endforeach
</div>
@endsection
