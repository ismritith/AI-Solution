<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::truncate();

        Service::create([
            'category' => 'infrastructure',
            'title' => 'Quantum Neural Mesh',
            'description' => 'A sub-millisecond telemetry backbone coordinating distributed neural workloads across isolated sandboxed execution nodes.',
            'icon' => 'memory',
            'tags' => 'Telemetry, Real-time, Mesh',
            'metric_subtitle' => '0.14ms latency reduction',
            'is_featured' => true,
        ]);

        Service::create([
            'category' => 'infrastructure',
            'title' => 'Cognitive Storage Nodes',
            'description' => 'Self-healing, multi-database synchronization indexes powered by threat-detection monitoring scripts.',
            'icon' => 'database',
            'tags' => 'Database, Sync, AI-Indexes',
            'metric_subtitle' => '99.999% Sync Consistency',
            'is_featured' => true,
        ]);

        Service::create([
            'category' => 'vertical',
            'title' => 'Autonomous Agent Swarms',
            'description' => 'Deploy collaborative sandboxed agent swarms specialized in updating product assets, resolving threat buffers, and managing pipelines.',
            'icon' => 'neurology',
            'tags' => 'Orchestrator, Sandboxing, Swarms',
            'metric_subtitle' => '84% operation gain',
            'is_featured' => true,
        ]);

        Service::create([
            'category' => 'step',
            'title' => 'Define Objective Node',
            'description' => 'Configure core optimization models, latency rules, and compliance sandboxes.',
            'icon' => 'flag',
            'step_number' => '1',
            'is_featured' => false,
        ]);

        Service::create([
            'category' => 'step',
            'title' => 'Orchestrate Telemetry',
            'description' => 'Establish safe datastreams between operational database clusters and AI sandboxes.',
            'icon' => 'analytics',
            'step_number' => '2',
            'is_featured' => false,
        ]);

        Service::create([
            'category' => 'step',
            'title' => 'Launch Auto-Pilot',
            'description' => 'Activate self-healing logic nodes, monitoring agents, and executive dashboards.',
            'icon' => 'bolt',
            'step_number' => '3',
            'is_featured' => false,
        ]);
    }
}
