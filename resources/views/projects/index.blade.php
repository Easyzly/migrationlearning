<x-layout title="Project Overview">
    <div>
        <x-button text="Settings"/>
        @foreach($projects as $project)
            <div class="flex flex-col gap-2">
                <p>{{ $project->name }}, created by: {{ $project->user->name }}</p>
                <div class="flex gap-4">
                    <x-link text="Edit" route="{{ route('projects.edit', $project->id) }}"/>
                    <x-link text="Show" route="{{ route('projects.show', $project->id) }}"/>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="text-xl font-semibold bg-red-500 px-5 py-2 rounded-xl text-white">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
