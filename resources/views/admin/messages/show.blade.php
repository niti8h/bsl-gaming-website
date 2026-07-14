@extends('admin.layouts.app')

@section('title', 'View Message')
@section('header')
    <a href="{{ route('admin.messages.index') }}" style="color: var(--royal-gold); text-decoration: none;">&larr; Back to Inbox</a>
@endsection

@section('content')
<div class="card" style="max-width: 800px;">
    <h2 style="margin-bottom: 20px; color: var(--royal-gold);">{{ $message->subject ?? 'No Subject' }}</h2>
    
    <div style="margin-bottom: 30px; border-bottom: 1px solid var(--dark-border); padding-bottom: 20px;">
        <p style="margin-bottom: 8px;"><strong>From:</strong> {{ $message->name }} &lt;{{ $message->email }}&gt;</p>
        <p style="margin-bottom: 8px;"><strong>Phone:</strong> {{ $message->phone_number ?? 'N/A' }}</p>
        <p style="margin-bottom: 8px;"><strong>Telegram ID:</strong> {{ $message->telegram_id ?? 'N/A' }}</p>
        <p style="margin-bottom: 8px;"><strong>Date:</strong> {{ $message->created_at->format('M d, Y h:i A') }}</p>
    </div>

    <div style="line-height: 1.6; font-size: 16px; white-space: pre-wrap;">{{ $message->message }}</div>
</div>
@endsection
