@extends('layouts.admin')
@section('content')
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="inserisci titolo">

    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea name="content" id="content" cols="30" rows="10">"{{old('content')}}"</textarea>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input"  {{old('published') ? 'cheched' : ''}} id="published" name="published">
      <label class="form-check-label" for="published">Published</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection