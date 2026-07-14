@extends('admin.layouts.app')

@section('title', 'Blogs')
@section('header')
    Blogs 
    <a href="{{ route('admin.blogs.create') }}" class="btn-primary" style="float: right; font-size: 14px; padding: 6px 12px;">+ Create Blog</a>
@endsection

@section('content')
<div class="card">
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $blog)
                <tr>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/'.$blog->image) }}" alt="Img" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                        @else
                            <div style="width: 50px; height: 50px; background: #333; border-radius: 4px;"></div>
                        @endif
                    </td>
                    <td>{{ \Illuminate\Support\Str::limit($blog->title, 40) }}</td>
                    <td>
                        @if($blog->published_at)
                            <span style="color: #2ed573;">Published</span>
                        @else
                            <span style="color: var(--royal-gold);">Draft</span>
                        @endif
                    </td>
                    <td>{{ $blog->created_at->format('M d, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn-primary" style="padding: 6px 12px; font-size: 12px; margin-right: 5px;">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger" style="padding: 6px 12px; font-size: 12px;">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 30px;">No blogs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    <div style="margin-top: 20px;">
        {{ $blogs->links() }}
    </div>
</div>
@endsection
