@extends('layouts.main')

@section('container')
  @foreach($posts as $post)
    <h2>
      <a href="blog/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h2>
    <h5>By: {{ $post["author"] }}</h5>
  @endforeach
@endsection