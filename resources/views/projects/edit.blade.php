<x-layout title="Project Editing">
    <form action="{{ route('projects.update', $project->id) }}" method="post">
        @csrf
        @method('PATCH')

        <input type="text" name="name" id="name" placeholder="Project naam" value="{{ $project->name }}">
        <input type="time" name="start_time" id="start_time" value="{{ $project->start_time }}">
        <input type="time" name="end_time" id="end_time" value="{{ $project->end_time }}">
        <input type="submit" value="Aanpassen">
    </form>
</x-layout>
