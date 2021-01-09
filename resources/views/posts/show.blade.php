@extends('templates.app',['title' => 'Detail'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <h4>Detail</h4>
      <div>
        <a href="{{ url('categories/' . $post->category->slug) }}">{{ $post->category->name }}</a>
        &middot; {{ $post->created_at->format('d F, Y') }}
        @foreach ($post->tags as $tag)
        <a href="{{ url('tags/' . $tag->slug) }}">#{{ $tag->name }}</a>
        @endforeach
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-lg-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$post->slug}}</h6>
          <p class="card-text">{{$post->content}}
          </p>
          <a href="{{url('posts/' . $post->slug . '/edit')}}" class="btn btn-primary">Edit</a>
          <form action="{{url('posts/' . $post->slug)}}" method="post" class="d-inline-block">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="{{url('posts')}}" class="card-link float-right">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection