<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Service;
use App\Models\Blog;
use App\Models\City;
use App\Models\Projects;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the website';

    public function handle()
    {
        // Create a new sitemap instance
        $sitemap = Sitemap::create();

        // Add static routes
        $sitemap->add(Url::create('/'))
                ->add(Url::create('/about-us'))
                ->add(Url::create('/services'))
                ->add(Url::create('/projects'))
                ->add(Url::create('/contact'))
                ->add(Url::create('/locations'))
                ->add(Url::create('/blogs'));

        // Add dynamic routes for services
        $services = Service::all(); // Make sure the 'slug' column exists
        foreach ($services as $service) {
            $sitemap->add(Url::create("/services/{$service->slug}"));
        }

        // Add dynamic routes for projects
        $projects = Projects::all(); // Make sure the 'slug' column exists
        foreach ($projects as $project) {
            $sitemap->add(Url::create("/projects/{$project->slug}"));
        }

        // Add dynamic routes for blog posts
        $blogs = Blog::all(); // Make sure the 'slug' column exists
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create("/blogs/{$blog->slug}"));
        }

        // Add dynamic routes for cities
        $cities = City::all(); // Make sure the 'slug' column exists
        foreach ($cities as $city) {
            $sitemap->add(Url::create("/{$city->slug}"));
        }

        // Save the sitemap to a file (public folder, for example)
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
