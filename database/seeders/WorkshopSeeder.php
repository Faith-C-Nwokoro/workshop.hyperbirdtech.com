<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Workshop;
use App\Models\StarterKit;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create workshops
        $workshops = [
            [
                'title' => 'The Future of Software: AI-Driven Problem Solving',
                'slug' => 'workshop-1-ai-problem-solving',
                'description' => 'Expert-led training by CEO on AI-driven problem solving, live demonstrations, and real-world use cases.',
                'category' => 'Artificial Intelligence',
                'date_scheduled' => '2026-02-07',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 25.00,
                'moderator' => 'Executive Secretary',
                'expected_audience' => 120,
                'is_active' => true,
            ],
            [
                'title' => 'Building Intelligent Web Applications with AI',
                'slug' => 'workshop-2-ai-web-apps',
                'description' => 'Learn to integrate AI into web applications with hands-on demos and interactive challenges.',
                'category' => 'AI & Web Development',
                'date_scheduled' => '2026-02-14',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 28.00,
                'moderator' => 'Program Manager',
                'expected_audience' => 100,
                'is_active' => true,
            ],
            [
                'title' => 'Blockchain Fundamentals for Scalable Solutions',
                'slug' => 'workshop-3-blockchain-fundamentals',
                'description' => 'Master blockchain fundamentals through interactive simulations and practical implementations.',
                'category' => 'Blockchain',
                'date_scheduled' => '2026-02-21',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 25.00,
                'moderator' => 'Executive Secretary',
                'expected_audience' => 90,
                'is_active' => true,
            ],
            [
                'title' => 'Web Development for Startups & SaaS Builders',
                'slug' => 'workshop-4-web-dev-startups',
                'description' => 'Build production-ready web applications for startups with modern frameworks and best practices.',
                'category' => 'Web Development',
                'date_scheduled' => '2026-02-28',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 27.00,
                'moderator' => 'Program Manager',
                'expected_audience' => 95,
                'is_active' => true,
            ],
            [
                'title' => 'AI for Business Automation and Growth',
                'slug' => 'workshop-5-ai-automation',
                'description' => 'Implement AI-powered automation to streamline business processes and drive growth.',
                'category' => 'Artificial Intelligence',
                'date_scheduled' => '2026-03-07',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 26.00,
                'moderator' => 'Executive Secretary',
                'expected_audience' => 90,
                'is_active' => true,
            ],
            [
                'title' => 'UI/UX Design for High-Impact Digital Products',
                'slug' => 'workshop-6-uiux-design',
                'description' => 'Create exceptional user experiences with modern design principles and tools.',
                'category' => 'Product Design',
                'date_scheduled' => '2026-03-14',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 25.00,
                'moderator' => 'Program Manager',
                'expected_audience' => 80,
                'is_active' => true,
            ],
            [
                'title' => 'Blockchain for FinTech, Supply Chain & Governance',
                'slug' => 'workshop-7-blockchain-fintech',
                'description' => 'Apply blockchain technology to financial services, supply chain, and governance systems.',
                'category' => 'Blockchain',
                'date_scheduled' => '2026-03-21',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 27.00,
                'moderator' => 'Executive Secretary',
                'expected_audience' => 85,
                'is_active' => true,
            ],
            [
                'title' => 'Digital Branding, Growth & Social Media Automation',
                'slug' => 'workshop-8-digital-marketing',
                'description' => 'Master digital branding and social media automation for maximum business impact.',
                'category' => 'Digital Marketing',
                'date_scheduled' => '2026-04-04',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 26.00,
                'moderator' => 'Program Manager',
                'expected_audience' => 90,
                'is_active' => true,
            ],
            [
                'title' => 'Building and Launching Scalable Tech Startups',
                'slug' => 'workshop-9-tech-startups',
                'description' => 'Learn the complete process of building and launching a successful tech startup.',
                'category' => 'Startup & Innovation',
                'date_scheduled' => '2026-04-11',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 28.00,
                'moderator' => 'Program Manager',
                'expected_audience' => 100,
                'is_active' => true,
            ],
            [
                'title' => 'Emerging Digital Trends & the Next Decade of Technology',
                'slug' => 'workshop-10-emerging-trends',
                'description' => 'Explore emerging technologies and trends that will shape the next decade of innovation.',
                'category' => 'Future Technologies',
                'date_scheduled' => '2026-04-18',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 28.00,
                'moderator' => 'Program Manager',
                'expected_audience' => 120,
                'is_active' => true,
            ],
        ];

        foreach ($workshops as $workshop) {
            Workshop::create($workshop);
        }

        // Create starter kits
        $starterKits = [
            [
                'workshop_id' => null,
                'name' => 'AI Development Toolkit',
                'slug' => 'ai-toolkit',
                'description' => 'Complete AI workflow templates, code samples, and integration guides for building intelligent applications using Hyperbird tools.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
            ],
            [
                'workshop_id' => null,
                'name' => 'Blockchain Starter Pack',
                'slug' => 'blockchain-pack',
                'description' => 'Smart contract templates, sandbox environment access, and blockchain implementation guides for FinTech and supply chain.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
            ],
            [
                'workshop_id' => null,
                'name' => 'Web Development Kit',
                'slug' => 'web-dev-kit',
                'description' => 'Full-stack templates, SaaS boilerplates, and deployment guides for building scalable web applications.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
            ],
            [
                'workshop_id' => null,
                'name' => 'UI/UX Design Resources',
                'slug' => 'design-resources',
                'description' => 'Design system templates, Figma files, and prototyping tools for creating high-impact digital products.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
            ],
            [
                'workshop_id' => null,
                'name' => 'Digital Marketing Automation Suite',
                'slug' => 'marketing-suite',
                'description' => 'Social media automation workflows, branding templates, and growth strategy frameworks.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
            ],
            [
                'workshop_id' => null,
                'name' => 'Startup Launch Package',
                'slug' => 'startup-package',
                'description' => 'Complete startup roadmap templates, pitch deck frameworks, and business planning tools.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
            ],
        ];

        foreach ($starterKits as $kit) {
            StarterKit::create($kit);
        }
    }
}
