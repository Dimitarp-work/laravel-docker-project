@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Create New Note</a>

    @foreach($notes as $note)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $note->title }}</h5>
                <p class="card-text">{{ $note->content }}</p>
                <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
