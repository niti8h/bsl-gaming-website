@extends('admin.layouts.app')

@section('title', 'Website Messages')
@section('header', 'Inbox')

@section('content')
<div class="card">
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $msg)
                <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($msg->subject, 30) }}</td>
                    <td>{{ $msg->created_at->format('M d, Y h:i A') }}</td>
                    <td>
                        <a href="{{ route('admin.messages.show', $msg->id) }}" class="btn-primary" style="padding: 6px 12px; font-size: 12px;">View</a>
                        <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger" style="padding: 6px 12px; font-size: 12px;">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 30px;">No messages found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    <div style="margin-top: 20px;">
        {{ $messages->links() }}
    </div>
</div>
@endsection
