<!doctype html>
<html lang="en">
<head>
    @include('Components.head')
    <title>{{$title}}</title>
</head>
<body>
@include('Components.header')

{{$slot}}

@include('Components.footer')
</body>
</html>
