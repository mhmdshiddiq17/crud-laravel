@extends('layouts.app')

@section('body')
        <h1 class="mb-0">Detail Book</h1>
    <hr />
    <div class="row">
  <div class="col mb-3">
    <label for="name" class="form-label">Book Name</label>
    <input type="text" id="name" class="form-control" placeholder="Book name" readonly value="{{$book->name}}">
  </div>
  <div class="col mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" id="author" class="form-control" placeholder="Author" readonly value="{{$book->author}}">
  </div>
</div>
<div class="row">
  <div class="col mb-3">
    <label for="year" class="form-label">Year Book</label>
    <input type="text" id="year" class="form-control" placeholder="Year" readonly value="{{$book->year}}">
  </div>
  <div class="col mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea id="description"  placeholder="Description" class="form-control" readonly >{{$book->description}}</textarea>
  </div>
</div>
<div class="row">
  <div class="col mb-3">
    <label for="created_at" class="form-label">Created At</label>
    <input type="text" for="created_at" class="form-control" placeholder="created_at" readonly value="{{$book->created_at}}">
  </div>
  <div class="col mb-3">
    <label for="updated_at" class="form-label">Updated At</label>
  <input type="text" id="updated_at"  class="form-control" placeholder="updated_at" readonly value="{{$book->updated_at}}">
  </div>
</div>




@endsection