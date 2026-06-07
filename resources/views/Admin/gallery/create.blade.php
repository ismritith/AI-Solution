@extends('admin.layouts.app')

@section('title', 'AI-Solutions Admin | Create Gallery Asset')

@section('content')
<div class="glass-card rounded-2xl p-6 max-w-3xl mx-auto">
    <div class="mb-6">
        <h3 class="text-on-surface font-semibold text-lg">Initialize Gallery Asset</h3>
        <p class="text-xs text-on-surface-variant">Inject a new node into the Visual Gallery system</p>
    </div>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Category</label>
                <select name="category" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="Security">Security</option>
                    <option value="Analytics">Analytics</option>
                    <option value="Automation">Automation</option>
                    <option value="Bento">Bento Grid Asset</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Media Type</label>
                <select name="media_type" id="media_type" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Upload Method</label>
                <select name="upload_method" id="upload_method" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="upload">Upload File</option>
                    <option value="link">External Resource Link</option>
                </select>
            </div>

            <div class="flex items-center mt-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_featured" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary border border-white/10"></div>
                    <span class="ms-3 text-sm font-medium text-on-surface">Feature on home canvas</span>
                </label>
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Asset Title</label>
                <input type="text" name="title" required placeholder="e.g. Cybernetic Threat Vector Analysis" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <!-- Upload input field -->
            <div id="file_container" class="space-y-2">
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Upload File</label>
                <input type="file" name="file" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1 file:mr-4 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-primary-container/20 file:text-primary hover:file:bg-primary-container/30">
            </div>

            <!-- External link field -->
            <div id="url_container" class="hidden space-y-2">
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">External URL</label>
                <input type="url" name="external_url" placeholder="https://youtube.com/embed/..." class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Asset Description</label>
                <!-- Hidden textarea to store the description HTML for server submission -->
                <input type="hidden" name="description" id="description_input">
                <div id="description_editor" class="min-h-[200px]"></div>
            </div>
        </div>

        <div class="flex justify-end gap-4 pt-4 border-t border-white/10">
            <a href="{{ route('admin.gallery.index') }}" class="py-2.5 px-5 rounded-xl bg-surface-container-highest/30 hover:bg-surface-container-highest text-sm text-on-surface-variant transition-colors">Cancel</a>
            <button type="submit" class="py-2.5 px-5 rounded-xl bg-gradient-to-r from-primary-container to-secondary-container text-white font-semibold text-sm hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all">Submit Asset</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Toggle Upload method fields
        const methodSelect = document.getElementById('upload_method');
        const fileContainer = document.getElementById('file_container');
        const urlContainer = document.getElementById('url_container');

        methodSelect.addEventListener('change', function() {
            if (methodSelect.value === 'upload') {
                fileContainer.classList.remove('hidden');
                urlContainer.classList.add('hidden');
            } else {
                fileContainer.classList.add('hidden');
                urlContainer.classList.remove('hidden');
            }
        });

        // Initialize Quill editor
        const quill = new Quill('#description_editor', {
            theme: 'snow',
            placeholder: 'Type description here...'
        });

        // Sync Quill HTML with hidden textarea on submit
        const form = document.querySelector('form');
        form.onsubmit = function() {
            const descInput = document.getElementById('description_input');
            descInput.value = quill.root.innerHTML;
        };
    });
</script>
@endsection
