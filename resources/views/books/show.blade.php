@extends('layouts.master')
@section('title', $book->judul)
<style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        body{background-color: black;}

        table{background-color: white;}
    
        h2{color: aqua;}

        label{color: white;}
    </style>
@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $book->judul }}</h2>
            </div>
            <div class="col-md-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            @method('DELETE')
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <h2>{{ $book->judul }}</h2>
        <h5>
            <span class="badge badge-primary">
                <i class="fa fa-star fa-fw"></i>
                {{ $book->kategori }}
            </span>
        </h5>
        <p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>{{ $book->halaman }}</em>
            </li>
            <li class="list-inline-item">
                <i class="fa fa-calendar fa-fw"></i>
                {{ $book->rating }}
            </li>
        </ul>
        </p>
        <hr>

    </div>
@endsection
