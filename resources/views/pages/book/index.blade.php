@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-beetwen">
        <h1 class="mb-0">List Book</h1>
        <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a>
    </div>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Author</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @if($books->count() > 0)
            @foreach($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->year}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('book.show', $book->id) }}" type="button" class="btn btn-secondary" >Detail</a>
                        <a type="button" class="btn btn-warning" href="{{ route('book.edit', $book->id) }}">Edit</a>
                        <form class="btn btn-danger p-0" action="{{ route('book.destroy', $book->id) }}" method="post" onsubmit="return confirm('Apakah yakin dihapus?')">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>
                </td>
                
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Book Not Found</td>
                </tr>
            @endif
        </tbody>
        

    </table>


  
    

@endsection