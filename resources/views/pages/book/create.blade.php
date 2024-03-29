@extends('layouts.app')

@section('body')
        <h1 class="mb-0">Add Book</h1>
    <hr />
<form action="{{ route('book.store') }}" method="post">
    @csrf
    <div class="row mb-3">
  <div class="col">
    <input type="text" name="name" class="form-control" placeholder="Book name">
  </div>
  <div class="col">
    <input type="text" name="author" class="form-control" placeholder="Author">
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <input type="text" name="year" class="form-control" placeholder="Year">
  </div>
  <div class="col">
    <textarea name="description"  placeholder="Description" class="form-control"></textarea>
  </div>
</div>
<div class="row">
    <div class="d-grid">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
</form>



@endsection