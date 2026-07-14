@extends('admin.layouts.app')

@section('title', 'Contact Settings')
@section('header', 'Contact Settings')

@section('content')
<div class="card" style="max-width: 600px;">
    <h2 style="margin-bottom: 20px; color: var(--royal-gold);">Update Contact Details</h2>
    
    <form action="{{ route('admin.settings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Primary Email</label>
            <input type="text" id="email" name="email" class="form-control" value="{{ $settings['email'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="email2">Secondary Email</label>
            <input type="text" id="email2" name="email2" class="form-control" value="{{ $settings['email2'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $settings['phone'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="address">Physical Address</label>
            <textarea id="address" name="address" class="form-control" rows="4">{{ $settings['address'] ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn-primary">Save Settings</button>
    </form>
</div>
@endsection
