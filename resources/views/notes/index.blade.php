@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($notes as $note)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-header">{{ $note->title }}</div>
                        <div class="card-body">{{ $note->description }}</div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-block" href="/notes/{{ $note->id }}/edit">Edit</a>
                            <form action="/notes/{{ $note->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block mt-1">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
