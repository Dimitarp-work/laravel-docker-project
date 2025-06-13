<x-app-layout>
    <x-slot name="header">{{ $note->title }}</x-slot>

    <div class="mt-4 border p-4 rounded bg-white">
        <p>{{ $note->content }}</p>
        <div class="mt-4">
            <a href="{{ route('notes.edit', $note) }}" class="text-blue-500">Edit</a>
        </div>
    </div>
</x-app-layout>
