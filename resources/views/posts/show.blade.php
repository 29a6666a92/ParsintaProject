@extends('templates.app',['title' => 'Detail'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <h2 class="my-3">Detail</h2>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$post->slug}}</h6>
          <p class="card-text">{{$post->content}}
          </p>
          <a href="{{url('posts')}}" class="card-link">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection