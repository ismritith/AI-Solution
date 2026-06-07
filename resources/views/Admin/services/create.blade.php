@extends('admin.layouts.app')

@section('title', 'AI-Solutions Admin | Create Service')

@section('content')
<div class="glass-card rounded-2xl p-6 max-w-3xl mx-auto">
    <div class="mb-6">
        <h3 class="text-on-surface font-semibold text-lg">Define Service Capability Node</h3>
        <p class="text-xs text-on-surface-variant">Inject a new functional service node into the matrix</p>
    </div>

    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Category Classification</label>
                <select name="category" id="category" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="infrastructure">Infrastructure Layer</option>
                    <option value="vertical">Industry Vertical Solution</option>
                    <option value="step">Step-by-Step Methodology</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Material Icon Symbol</label>
                <select name="icon" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="neurology">Neurology (Brain)</option>
                    <option value="memory">Memory (Processor)</option>
                    <option value="shield">Shield (Security)</option>
                    <option value="bolt">Bolt (Performance)</option>
                    <option value="database">Database (Storage)</option>
                    <option value="insights">Insights (Analytics)</option>
                    <option value="settings_applications">Settings (Systems)</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2">
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Service Title</label>
                <input type="text" name="title" required placeholder="e.g. Distributed Neural Engine" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div class="flex items-center mt-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_featured" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary border border-white/10"></div>
                    <span class="ms-3 text-sm font-medium text-on-surface">Featured Capability</span>
                </label>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Metric / Subtitle</label>
                <input type="text" name="metric_subtitle" placeholder="e.g. Boost speed by 40%" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Step Number (Methodology Only)</label>
                <input type="text" name="step_number" placeholder="e.g. 01" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Telemetry Tags (Comma-separated)</label>
                <input type="text" name="tags" placeholder="e.g. LLM, CUDA, GPU" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>
        </div>

        <div>
            <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Detailed Capability Description</label>
            <!-- Hidden textarea to store the description HTML for server submission -->
            <input type="hidden" name="description" id="description_input">
            <div id="description_editor" class="min-h-[200px]"></div>
        </div>

        <div class="flex justify-end gap-4 pt-4 border-t border-white/10">
            <a href="{{ route('admin.services.index') }}" class="py-2.5 px-5 rounded-xl bg-surface-container-highest/30 hover:bg-surface-container-highest text-sm text-on-surface-variant transition-colors">Cancel</a>
            <button type="submit" class="py-2.5 px-5 rounded-xl bg-gradient-to-r from-primary-container to-secondary-container text-white font-semibold text-sm hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all">Submit Capability</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Quill editor
        const quill = new Quill('#description_editor', {
            theme: 'snow',
            placeholder: 'Type comprehensive description here...'
        });

        // Sync Quill HTML with hidden input on submit
        const form = document.querySelector('form');
        form.onsubmit = function() {
            const descInput = document.getElementById('description_input');
            descInput.value = quill.root.innerHTML;
        };
    });
</script>
@endsection
