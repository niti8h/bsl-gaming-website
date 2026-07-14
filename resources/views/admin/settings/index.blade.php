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

        <button type="submit" class="btn-primary" style="margin-bottom: 30px;">Save Settings</button>

        <h2 style="margin-bottom: 20px; margin-top: 20px; color: var(--royal-gold); border-top: 1px solid #333; padding-top: 20px;">Trust Numbers (Homepage)</h2>

        <div style="display: flex; gap: 20px;">
            <div class="form-group" style="flex: 1;">
                <label for="trust_number_1">Stat 1 Number (e.g. 10+)</label>
                <input type="text" id="trust_number_1" name="trust_number_1" class="form-control" value="{{ $settings['trust_number_1'] ?? '10+' }}">
            </div>
            <div class="form-group" style="flex: 1;">
                <label for="trust_label_1">Stat 1 Label (e.g. Years Experience)</label>
                <input type="text" id="trust_label_1" name="trust_label_1" class="form-control" value="{{ $settings['trust_label_1'] ?? 'Years Experience' }}">
            </div>
        </div>

        <div style="display: flex; gap: 20px;">
            <div class="form-group" style="flex: 1;">
                <label for="trust_number_2">Stat 2 Number (e.g. 150+)</label>
                <input type="text" id="trust_number_2" name="trust_number_2" class="form-control" value="{{ $settings['trust_number_2'] ?? '150+' }}">
            </div>
            <div class="form-group" style="flex: 1;">
                <label for="trust_label_2">Stat 2 Label (e.g. Projects Completed)</label>
                <input type="text" id="trust_label_2" name="trust_label_2" class="form-control" value="{{ $settings['trust_label_2'] ?? 'Projects Completed' }}">
            </div>
        </div>

        <div style="display: flex; gap: 20px;">
            <div class="form-group" style="flex: 1;">
                <label for="trust_number_3">Stat 3 Number (e.g. 50+)</label>
                <input type="text" id="trust_number_3" name="trust_number_3" class="form-control" value="{{ $settings['trust_number_3'] ?? '50+' }}">
            </div>
            <div class="form-group" style="flex: 1;">
                <label for="trust_label_3">Stat 3 Label (e.g. Industry Experts)</label>
                <input type="text" id="trust_label_3" name="trust_label_3" class="form-control" value="{{ $settings['trust_label_3'] ?? 'Industry Experts' }}">
            </div>
        </div>

        <div style="display: flex; gap: 20px;">
            <div class="form-group" style="flex: 1;">
                <label for="trust_number_4">Stat 4 Number (e.g. 100%)</label>
                <input type="text" id="trust_number_4" name="trust_number_4" class="form-control" value="{{ $settings['trust_number_4'] ?? '100%' }}">
            </div>
            <div class="form-group" style="flex: 1;">
                <label for="trust_label_4">Stat 4 Label (e.g. Client Satisfaction)</label>
                <input type="text" id="trust_label_4" name="trust_label_4" class="form-control" value="{{ $settings['trust_label_4'] ?? 'Client Satisfaction' }}">
            </div>
        </div>

        <button type="submit" class="btn-primary">Save Settings</button>
    </form>
</div>
@endsection
