@extends('admin.layouts.app')

@section('title', 'Appearance Settings')
@section('header', 'Appearance Settings')

@section('content')
<div class="card" style="max-width: 800px;">
    <h2 style="margin-bottom: 20px; color: var(--royal-gold);">Update Site Logos & Hero</h2>
    
    <form action="{{ route('admin.appearance.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h3 style="margin-bottom: 15px; border-bottom: 1px solid var(--dark-border); padding-bottom: 5px;">Logos</h3>

        <div class="form-group">
            <label for="logo_image">Main Header Logo</label>
            <input type="file" id="logo_image" name="logo_image" class="form-control" accept="image/*">
            @if(isset($settings['logo_image']) && $settings['logo_image'])
                <div style="margin-top: 10px;">
                    <img src="{{ asset('storage/' . $settings['logo_image']) }}" alt="Header Logo" style="max-height: 50px; background: #fff; padding: 5px; border-radius: 4px;">
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="footer_logo">Footer Logo</label>
            <input type="file" id="footer_logo" name="footer_logo" class="form-control" accept="image/*">
            @if(isset($settings['footer_logo']) && $settings['footer_logo'])
                <div style="margin-top: 10px;">
                    <img src="{{ asset('storage/' . $settings['footer_logo']) }}" alt="Footer Logo" style="max-height: 50px; background: #fff; padding: 5px; border-radius: 4px;">
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="favicon">Favicon (Browser Tab Icon)</label>
            <input type="file" id="favicon" name="favicon" class="form-control" accept="image/png, image/x-icon, image/jpeg, image/webp">
            @if(isset($settings['favicon']) && $settings['favicon'])
                <div style="margin-top: 10px;">
                    <img src="{{ asset('storage/' . $settings['favicon']) }}" alt="Favicon" style="max-height: 32px; border-radius: 4px;">
                </div>
            @endif
        </div>

        <h3 style="margin-top: 30px; margin-bottom: 15px; border-bottom: 1px solid var(--dark-border); padding-bottom: 5px;">Homepage Hero Section</h3>

        <div class="form-group">
            <label for="hero_title">Hero Title</label>
            <input type="text" id="hero_title" name="hero_title" class="form-control" value="{{ $settings['hero_title'] ?? '' }}" placeholder="iGaming Software Development Services">
        </div>

        <div class="form-group">
            <label for="hero_subtitle">Hero Subtitle</label>
            <textarea id="hero_subtitle" name="hero_subtitle" class="form-control" rows="3">{{ $settings['hero_subtitle'] ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="hero_image">Hero Background / Banner Image</label>
            <input type="file" id="hero_image" name="hero_image" class="form-control" accept="image/*">
            @if(isset($settings['hero_image']) && $settings['hero_image'])
                <div style="margin-top: 10px;">
                    <img src="{{ asset('storage/' . $settings['hero_image']) }}" alt="Hero Image" style="max-height: 100px; border-radius: 4px;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn-primary" style="margin-top: 10px;">Save Appearance Settings</button>
    </form>
</div>
@endsection
