@extends('layouts.app')

@section('content')
    <input type="text" name="name" id="name" readonly value="{{ $project->name }}">
    <input type="time" name="start_time" readonly id="start_time" value="{{ $project->start_time }}">
    <input type="time" name="end_time" readonly id="end_time" value="{{ $project->end_time }}">
@endsection
