@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('header', 'Overview')

@section('content')
<div class="card">
    <h2 style="color: var(--royal-gold); margin-bottom: 20px;">Welcome back, Admin.</h2>
    <p style="color: var(--text-muted); margin-bottom: 30px;">Here is a quick overview of your website.</p>

    <div style="display: flex; gap: 20px;">
        <div class="card" style="flex: 1; border-color: var(--royal-gold); text-align: center;">
            <h3 style="font-size: 40px; color: var(--text-main); margin-bottom: 10px;">{{ $blogCount }}</h3>
            <p style="color: var(--text-muted); text-transform: uppercase; font-size: 14px; font-weight: bold;">Total Blogs</p>
        </div>
        <div class="card" style="flex: 1; border-color: var(--royal-gold); text-align: center;">
            <h3 style="font-size: 40px; color: var(--text-main); margin-bottom: 10px;">{{ $messageCount }}</h3>
            <p style="color: var(--text-muted); text-transform: uppercase; font-size: 14px; font-weight: bold;">Contact Messages</p>
        </div>
    </div>
</div>
@endsection
