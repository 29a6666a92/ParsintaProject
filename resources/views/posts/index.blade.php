@extends('templates.app',['title' => 'Post'])

@section('content')
<div class="container">
  <div class="d-flex justify-content-between">
    <div>
      @isset($category)
      <h4>Category : {{ $category->name }}</h4>
      @endisset
      @isset($tag)
      <h4>Tags : {{ $tag->name }}</h4>
      @endisset

      @if (!isset($category) && !isset($tag) )
      <h4>Post</h4>
      @endif

    </div>
    <div>
      <a href="{{url('posts/create')}}" class="btn btn-primary">New</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('status')}}</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    </div>
  </div>
  <div class="row">
    @forelse ($posts as $post)
    <div class="col-lg-4">
      <div class="card mb-3">
        <div class="card-header">
          {{$post->title}}
        </div>
        <div class="card-body">
          <p class="card-text">{{Str::limit($post->content,100)}}</p>
          <a href="{{url('posts/' . $post->slug)}}" class="btn btn-primary">Read more</a>
        </div>
        <div class="card-footer text-muted">
          Published {{$post->created_at->diffForHumans()}}
        </div>
      </div>
    </div>
    @empty
    <div class="alert alert-primary" role="alert">
      NO DATA THERE
    </div>
    @endforelse
  </div>


  <div class="d-flex justify-content-center">
    {{$posts->links()}}
  </div>
</div>
@endsection