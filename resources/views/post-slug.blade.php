@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    <body>
        @foreach ($posts as $posts)
        <!-- Additional post details -->
        {{-- <h1><a href="{{ route('postslug.show', $posts->slug) }}">{{ $posts->title }}</a></h1> --}}
        <a href="{{url('post/'$id'')}}" class="btn btn-info btn-sm" />Edit</a>
        <p>{{ $posts->description }}</p>
        <!-- Additional post details -->
        @endforeach
    </body>

</body>
</html>
