<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            All Notes
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-4 flex justify-between items-center">
            <a href="{{ route('notes.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                + New Note
            </a>
        </div>

        @forelse($notes as $note)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-5 border dark:border-gray-700">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $note->title }}</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $note->content }}</p>

                <div class="flex gap-2">
                    <a href="{{ route('notes.edit', $note) }}"
                       class="inline-block px-4 py-1 text-sm text-white bg-blue-600 rounded hover:bg-blue-700 transition">
                        Edit
                    </a>

                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="text-gray-500 dark:text-gray-400 text-center">No notes yet.</div>
        @endforelse
    </div>
</x-app-layout>
