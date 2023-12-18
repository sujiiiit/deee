@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit note</div>

                    <div class="card-body">
                        <form action="/notes/{{ $note->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $note->title }}" id="title"><br>

                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $note->description }}</textarea>

                            <button class="form-control btn btn-success mt-2" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
