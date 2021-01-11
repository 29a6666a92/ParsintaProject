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
  <label for="category">Category</label>
  <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
    <option disabled selected>Choose option</option>
    @foreach ($categories as $category)
    <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">
      {{ $category->name }}</option>
    @endforeach
  </select>
  @error('category')
  <div class="invalid-feedback">
    {{$message}}
  </div>
  @enderror
</div>

<div class="form-group">
  <label for="tags">Tags</label>
  <select class="form-control select2 @error('tags') is-invalid @enderror" id="tags" name="tags[]" multiple>
    @foreach ($post->tags as $tag)
    <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
    @endforeach
    @foreach ($tags as $tag)
    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
    @endforeach
  </select>
  @error('tags')
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