<x-layout title="Project Overview">
    <div>
        @foreach($projects as $project)
            <div>
                <p>{{ $project->name }}, created by: {{ $project->user->name }}</p>
                <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
                <a href="{{ route('projects.show', $project->id) }}">Show</a>
                <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </div>
        @endforeach

        <x-button text="buhh"></x-button>
    </div>
</x-layout>
