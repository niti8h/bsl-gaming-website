@csrf

<div class="form-group">
    <label for="title">Title <span style="color:red;">*</span></label>
    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" required>
    @error('title') <span style="color: #ff4757; font-size: 12px;">{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="meta_description">Meta Description (SEO)</label>
    <textarea id="meta_description" name="meta_description" class="form-control" rows="2">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="published_at">Published Date</label>
    <input type="datetime-local" id="published_at" name="published_at" class="form-control" value="{{ old('published_at', isset($blog->published_at) ? \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d\TH:i') : '') }}">
</div>

<div class="form-group">
    <label for="image">Featured Image</label>
    <input type="file" id="image" name="image" class="form-control" accept="image/*">
    @if(isset($blog) && $blog->image)
        <div style="margin-top: 10px;">
            <img src="{{ asset('storage/'.$blog->image) }}" alt="Current Image" style="max-height: 100px; border-radius: 4px;">
        </div>
    @endif
    @error('image') <span style="color: #ff4757; font-size: 12px;">{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="editor">Content <span style="color:red;">*</span></label>
    <!-- Hidden input to store Quill content -->
    <input type="hidden" name="content" id="content">
    
    <!-- Quill Editor Container -->
    <div id="editor" style="height: 400px; background: #fff; color: #000;">{!! old('content', $blog->content ?? '') !!}</div>
    @error('content') <span style="color: #ff4757; font-size: 12px;">{{ $message }}</span> @enderror
</div>

<button type="submit" class="btn-primary" style="margin-top: 20px;">Save Blog Post</button>

@push('scripts')
<script>
    var quill = new Quill('#editor', {
        theme: 'snow',
        placeholder: 'Write your royal blog post here...',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    });

    // Populate hidden input before submit
    document.getElementById('content').closest('form').onsubmit = function() {
        var contentHTML = quill.root.innerHTML;
        if (contentHTML === '<p><br></p>') {
            document.getElementById('content').value = '';
        } else {
            document.getElementById('content').value = contentHTML;
        }
    };
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#published_at", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>
@endpush
