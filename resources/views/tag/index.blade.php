<x-layout :title="$pageTitle">
  <h2>Tags</h2>
  @foreach ($tags as $tag)
    <h1>{{ $tag->title }}</h1>
  @endforeach
  
</x-layout>