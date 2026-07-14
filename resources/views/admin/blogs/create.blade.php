@extends('admin.layouts.app')

@section('title', 'Create Blog')
@section('header')
    <a href="{{ route('admin.blogs.index') }}" style="color: var(--royal-gold); text-decoration: none;">&larr; Back to Blogs</a>
@endsection

@section('content')
<div class="card">
    <h2 style="margin-bottom: 20px; color: var(--royal-gold);">Create New Blog Post</h2>
    
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.blogs._form')
    </form>
</div>
@endsection
