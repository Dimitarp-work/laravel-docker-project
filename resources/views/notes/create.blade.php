<x-app-layout>
    <x-slot name="header">Create Note</x-slot>

    <form method="POST" action="{{ route('notes.store') }}" class="space-y-4 mt-4">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label>Content</label>
            <textarea name="content" rows="6" class="w-full border p-2 rounded" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</x-app-layout>
