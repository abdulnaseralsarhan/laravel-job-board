<x-layout :title="$pageTitle">
  <h2>Blog</h2>
  @foreach ($post as $post)
    <h1>{{ $post->title }}</h1>
    <h2>{{ $post->body }}</h2>
  @endforeach
  
</x-layout>