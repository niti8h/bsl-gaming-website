@extends('admin.layouts.app')
@section('title', 'Add Testimonial')

@section('content')
<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.testimonials.index') }}" style="color: var(--text-muted); text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
        <i class="fa fa-arrow-left"></i> Back to Testimonials
    </a>
</div>

<h2 style="color: var(--royal-gold); font-size: 24px; font-weight: 600; margin-bottom: 20px;">Add New Testimonial</h2>

<div style="background-color: var(--dark-surface); border: 1px solid var(--dark-border); border-radius: 8px; padding: 30px;">
    <form action="{{ route('admin.testimonials.store') }}" method="POST">
        @csrf
        
        <div style="margin-bottom: 20px;">
            <label for="client_name" style="display: block; margin-bottom: 8px; color: var(--text-muted);">Client Name</label>
            <input type="text" name="client_name" id="client_name" value="{{ old('client_name') }}" required
                style="width: 100%; padding: 12px; background-color: var(--dark-bg); border: 1px solid var(--dark-border); color: #fff; border-radius: 4px; font-family: inherit;">
            @error('client_name')
                <div style="color: #dc3545; margin-top: 5px; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label for="content" style="display: block; margin-bottom: 8px; color: var(--text-muted);">Testimonial Content</label>
            <textarea name="content" id="content" rows="5" required
                style="width: 100%; padding: 12px; background-color: var(--dark-bg); border: 1px solid var(--dark-border); color: #fff; border-radius: 4px; font-family: inherit; resize: vertical;">{{ old('content') }}</textarea>
            @error('content')
                <div style="color: #dc3545; margin-top: 5px; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="display: flex; gap: 20px; margin-bottom: 20px;">
            <div style="flex: 1;">
                <label for="rating" style="display: block; margin-bottom: 8px; color: var(--text-muted);">Rating (1-5)</label>
                <input type="number" name="rating" id="rating" value="{{ old('rating', 5) }}" min="1" max="5" required
                    style="width: 100%; padding: 12px; background-color: var(--dark-bg); border: 1px solid var(--dark-border); color: #fff; border-radius: 4px; font-family: inherit;">
                @error('rating')
                    <div style="color: #dc3545; margin-top: 5px; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="flex: 1;">
                <label for="sort_order" style="display: block; margin-bottom: 8px; color: var(--text-muted);">Sort Order</label>
                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}"
                    style="width: 100%; padding: 12px; background-color: var(--dark-bg); border: 1px solid var(--dark-border); color: #fff; border-radius: 4px; font-family: inherit;">
                @error('sort_order')
                    <div style="color: #dc3545; margin-top: 5px; font-size: 14px;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" checked style="width: 18px; height: 18px;">
                <span style="color: var(--text-main);">Active (Show on website)</span>
            </label>
        </div>

        <div>
            <button type="submit" style="background-color: var(--royal-gold); color: #000; padding: 12px 24px; border: none; border-radius: 4px; font-weight: 600; cursor: pointer; font-size: 16px;">
                Save Testimonial
            </button>
        </div>
    </form>
</div>
@endsection
