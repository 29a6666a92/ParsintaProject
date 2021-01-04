<div class="form-group">
  <label for="title">Title</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
    value="{{old('title') ?? $post->title}}">
  @error('title')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
</div>
<div class="form-group">
  <label for="content">Content</label>
  <input type="text" class="form-control @error('content') is-invalid @enderror" id="content"
    value="{{old('content') ?? $post->content}}" name="content">
  @error('content')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
</div>
<button type="submit" class="btn btn-primary">{{$submit  ?? 'Update'}}</button>
<a href="{{url('posts/' . $post->slug)}}" class="btn btn-danger">Cancel</a>