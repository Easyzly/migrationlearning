<x-layout title="Project Creating">
    <form action="{{ route('projects.store') }}" method="post">
        @csrf

        <input type="hidden" name="user_id" value="{{ 1 }}">
        <input type="text" name="name" id="name" placeholder="Project naam">
        <input type="time" name="start_time" id="start_time" value="00:00">
        <input type="time" name="end_time" id="end_time" value="00:00">
        <input type="submit" value="Toevoegen">
    </form>
</x-layout>
