@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Book Details
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('updateBook')}}">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Book Name</label>
                                <input  type="hidden" name="id" value="{{$book->id}}">
                                <input  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                        placeholder="" value="{{$book->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                       placeholder="" value="{{$book->author}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. of Pages</label>
                                <input type="number" name="pages" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                        placeholder="" value="{{$book->pages}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                        placeholder="" value="{{$book->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Published Year</label>
                                <input type="number" name="published" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                        placeholder="" value="{{$book->published}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rating</label>
                                <input type="text" name="rating" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                        placeholder=""  value="{{$book->rating}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection