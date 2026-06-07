@extends('admin.layouts.app')

@section('title', 'AI-Solutions Admin | Edit Service')

@section('content')
<div class="glass-card rounded-2xl p-6 max-w-3xl mx-auto">
    <div class="mb-6">
        <h3 class="text-on-surface font-semibold text-lg">Modify Service Capability Node</h3>
        <p class="text-xs text-on-surface-variant">Update telemetry and classification registry for capability #{{ $service->id }}</p>
    </div>

    <form action="{{ route('admin.services.update', $service) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Category Classification</label>
                <select name="category" id="category" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="infrastructure" {{ $service->category === 'infrastructure' ? 'selected' : '' }}>Infrastructure Layer</option>
                    <option value="vertical" {{ $service->category === 'vertical' ? 'selected' : '' }}>Industry Vertical Solution</option>
                    <option value="step" {{ $service->category === 'step' ? 'selected' : '' }}>Step-by-Step Methodology</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Material Icon Symbol</label>
                <select name="icon" required class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface focus:ring-primary focus:border-primary focus:ring-1">
                    <option value="neurology" {{ $service->icon === 'neurology' ? 'selected' : '' }}>Neurology (Brain)</option>
                    <option value="memory" {{ $service->icon === 'memory' ? 'selected' : '' }}>Memory (Processor)</option>
                    <option value="shield" {{ $service->icon === 'shield' ? 'selected' : '' }}>Shield (Security)</option>
                    <option value="bolt" {{ $service->icon === 'bolt' ? 'selected' : '' }}>Bolt (Performance)</option>
                    <option value="database" {{ $service->icon === 'database' ? 'selected' : '' }}>Database (Storage)</option>
                    <option value="insights" {{ $service->icon === 'insights' ? 'selected' : '' }}>Insights (Analytics)</option>
                    <option value="settings_applications" {{ $service->icon === 'settings_applications' ? 'selected' : '' }}>Settings (Systems)</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2">
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Service Title</label>
                <input type="text" name="title" value="{{ $service->title }}" required placeholder="e.g. Distributed Neural Engine" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div class="flex items-center mt-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_featured" class="sr-only peer" {{ $service->is_featured ? 'checked' : '' }}>
                    <div class="relative w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary border border-white/10"></div>
                    <span class="ms-3 text-sm font-medium text-on-surface">Featured Capability</span>
                </label>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Metric / Subtitle</label>
                <input type="text" name="metric_subtitle" value="{{ $service->metric_subtitle }}" placeholder="e.g. Boost speed by 40%" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Step Number (Methodology Only)</label>
                <input type="text" name="step_number" value="{{ $service->step_number }}" placeholder="e.g. 01" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>

            <div>
                <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Telemetry Tags (Comma-separated)</label>
                <input type="text" name="tags" value="{{ $service->tags }}" placeholder="e.g. LLM, CUDA, GPU" class="w-full bg-surface-container border border-white/10 rounded-xl px-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-primary focus:border-primary focus:ring-1">
            </div>
        </div>

        <div>
            <label class="block text-xs font-label-mono uppercase tracking-widest text-on-surface-variant mb-2">Detailed Capability Description</label>
            <!-- Hidden textarea to store the description HTML for server submission -->
            <input type="hidden" name="description" id="description_input" value="{!! clean($service->description) !!}">
            <div id="description_editor" class="min-h-[200px]">{!! $service->description !!}</div>
        </div>

        <div class="flex justify-end gap-4 pt-4 border-t border-white/10">
            <a href="{{ route('admin.services.index') }}" class="py-2.5 px-5 rounded-xl bg-surface-container-highest/30 hover:bg-surface-container-highest text-sm text-on-surface-variant transition-colors">Cancel</a>
            <button type="submit" class="py-2.5 px-5 rounded-xl bg-gradient-to-r from-primary-container to-secondary-container text-white font-semibold text-sm hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all">Save Changes</button>
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

        // Sync Quill HTML on submit
        const form = document.querySelector('form');
        form.onsubmit = function() {
            const descInput = document.getElementById('description_input');
            descInput.value = quill.root.innerHTML;
        };
    });
</script>
@endsection
