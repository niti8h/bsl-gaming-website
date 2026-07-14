@extends('admin.layouts.app')

@section('title', 'Edit Blog')
@section('header')
    <a href="{{ route('admin.blogs.index') }}" style="color: var(--royal-gold); text-decoration: none;">&larr; Back to Blogs</a>
@endsection

@section('content')
<div class="card">
    <h2 style="margin-bottom: 20px; color: var(--royal-gold);">Edit Blog: {{ $blog->title }}</h2>
    
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.blogs._form')
    </form>
</div>
@endsection
