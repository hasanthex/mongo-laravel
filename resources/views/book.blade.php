@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Books List
                    <button class="btn btn-sm btn-dark float-right">Add New</button>
                </div>

                <div class="card-body">
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                                <td>The Last Game</td>
                                <td>Ben Yareem</td>
                                <td>209</td>
                                <td>$10.00</td>
                                <td>2019</td>
                                <td>4.5</td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
