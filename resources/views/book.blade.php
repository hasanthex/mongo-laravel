@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Books List
                    <button class="btn btn-sm btn-dark float-right" data-toggle="modal" data-target="#exampleModal">
                        Add New
                    </button>
                    
                </div>

                <div class="card-body">
                    <p class="text-success">{{Session::get('message')}}</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Pages</th>
                            <th scope="col">Price</th>
                            <th scope="col">Published</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($books as $book)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->pages}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$book->published}}</td>
                                    <td>{{$book->rating}}</td>
                                    <td>
                                        <a href="{{route('editBook', ['id'=>$book->id])}}">
                                            <svg id="i-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
                                            </svg>
                                        </a> 
                                        <a href="{{route('deleteBook', ['id'=>$book->id])}}" 
                                            onclick="return confirm('Are you want to delete this book ?')">
                                            <svg id="i-trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Book</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('saveBook')}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Book Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Author</label>
                                        <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. of Pages</label>
                                        <input type="number" name="pages" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Published Year</label>
                                        <input type="number" name="published" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rating</label>
                                        <input type="text" name="rating" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
