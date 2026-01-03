@extends('layouts.app')

@section('content')
<h1>{{ $blog->title }}</h1>

@if($blog->featured_image)
    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}">
@endif

<div>{!! $blog->content !!}</div>
@endsection