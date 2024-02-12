@extends('layouts.app')

@section('body')
        <h1 class="mb-0">Edit Book</h1>
    <hr />
    
    <form action="{{ route('book.update', $book->id) }}" method="post">
      @csrf
      @method('PUT')
        <div class="row">
      <div class="col mb-3">
        <label for="name" class="form-label">Book Name</label>
        <input type="text" id="name" class="form-control" placeholder="Book name"  value="{{$book->name}}" name="name">
      </div>
      <div class="col mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" id="author" class="form-control" placeholder="Author"  value="{{$book->author}}" name="author">
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label for="year" class="form-label">Year Book</label>
        <input type="text" id="year" class="form-control" placeholder="Year"  value="{{$book->year}}" name="year">
      </div>
      <div class="col mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea id="description"  placeholder="Description" class="form-control" name="description" >{{$book->description}}</textarea>
      </div>
    </div>
    <div class="row">
      <div class="d-grid">
        <button type="submit" class="btn btn-warning">Update</button>
        </div>
      
      </div>
    </form>





@endsection