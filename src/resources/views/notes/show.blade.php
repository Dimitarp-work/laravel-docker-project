@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->content }}</p>
    <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
