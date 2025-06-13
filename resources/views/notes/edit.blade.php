<x-app-layout>
    <x-slot name="header">Edit Note</x-slot>

    <form method="POST" action="{{ route('notes.update', $note) }}" class="space-y-4 mt-4">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $note->title }}" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label>Content</label>
            <textarea name="content" rows="6" class="w-full border p-2 rounded" required>{{ $note->content }}</textarea>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</x-app-layout>
