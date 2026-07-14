@extends('admin.layouts.app')
@section('title', 'Manage Testimonials')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2 style="color: var(--royal-gold); font-size: 24px; font-weight: 600;">Testimonials</h2>
    <a href="{{ route('admin.testimonials.create') }}" style="background-color: var(--royal-gold); color: #000; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
        <i class="fa fa-plus"></i> Add Testimonial
    </a>
</div>

@if(session('success'))
<div style="background-color: rgba(40, 167, 69, 0.1); border-left: 4px solid #28a745; padding: 15px; margin-bottom: 20px; color: #28a745; border-radius: 4px;">
    {{ session('success') }}
</div>
@endif

<div style="background-color: var(--dark-surface); border: 1px solid var(--dark-border); border-radius: 8px; overflow: hidden;">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: rgba(255, 255, 255, 0.02); border-bottom: 1px solid var(--dark-border);">
                <th style="padding: 15px 20px; text-align: left; color: var(--text-muted); font-weight: 500; width: 50px;">Order</th>
                <th style="padding: 15px 20px; text-align: left; color: var(--text-muted); font-weight: 500;">Client</th>
                <th style="padding: 15px 20px; text-align: left; color: var(--text-muted); font-weight: 500;">Content</th>
                <th style="padding: 15px 20px; text-align: center; color: var(--text-muted); font-weight: 500; width: 100px;">Rating</th>
                <th style="padding: 15px 20px; text-align: center; color: var(--text-muted); font-weight: 500; width: 100px;">Status</th>
                <th style="padding: 15px 20px; text-align: right; color: var(--text-muted); font-weight: 500; width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($testimonials as $testimonial)
            <tr style="border-bottom: 1px solid var(--dark-border);">
                <td style="padding: 15px 20px;">{{ $testimonial->sort_order }}</td>
                <td style="padding: 15px 20px; font-weight: 500; color: #fff;">{{ $testimonial->client_name }}</td>
                <td style="padding: 15px 20px; color: var(--text-muted);">{{ Str::limit($testimonial->content, 50) }}</td>
                <td style="padding: 15px 20px; text-align: center;">{{ $testimonial->rating }} <i class="fa fa-star" style="color: var(--royal-gold);"></i></td>
                <td style="padding: 15px 20px; text-align: center;">
                    @if($testimonial->is_active)
                        <span style="background-color: rgba(40, 167, 69, 0.1); color: #28a745; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">Active</span>
                    @else
                        <span style="background-color: rgba(220, 53, 69, 0.1); color: #dc3545; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">Inactive</span>
                    @endif
                </td>
                <td style="padding: 15px 20px; text-align: right;">
                    <div style="display: flex; justify-content: flex-end; gap: 10px;">
                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}" style="color: var(--royal-gold); text-decoration: none; padding: 5px;" title="Edit">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: #dc3545; cursor: pointer; padding: 5px;" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="padding: 30px; text-align: center; color: var(--text-muted);">
                    No testimonials found. Click "Add Testimonial" to create one.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
