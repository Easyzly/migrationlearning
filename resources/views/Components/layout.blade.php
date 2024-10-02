<!doctype html>
<html lang="en">
<head>
    @include('Components.head')
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
@include('Components.header')

{{$slot}}

@include('Components.footer')
</body>
</html>
