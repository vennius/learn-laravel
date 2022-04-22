@extends('layouts.main')

@section('container')
  <h2>{{ $post["title"] }}</h2>
  <h3>{{ $post["author"] }}</h3>
  <p>{{ $post["content"] }}</p>
  <a href="/blog">Back to posts</a>
@endsection