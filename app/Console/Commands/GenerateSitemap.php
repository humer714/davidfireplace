<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\City;
use App\Models\Service;
use App\Models\Projects;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the website';

    public function handle()
    {
        // Define your live domain URL here
        $baseUrl = 'https://davidfireplacecleaningrepair.com';

        // Create a new sitemap instance
        $sitemap = Sitemap::create();

        // Add static routes
        $staticRoutes = [
            '/',
            '/about-us',
            '/services',
            '/projects',
            '/contact',
            '/locations',
            '/blogs',
        ];

        foreach ($staticRoutes as $route) {
            $sitemap->add(Url::create("{$baseUrl}{$route}"));
        }

        // Add dynamic routes for services
        $services = Service::all(); 
        foreach ($services as $service) {
            $sitemap->add(Url::create("{$baseUrl}/services/{$service->slug}"));
        }

        // Add dynamic routes for projects
        $projects = Projects::all();
        foreach ($projects as $project) {
            $sitemap->add(Url::create("{$baseUrl}/projects/{$project->slug}"));
        }

        // Add dynamic routes for blog posts
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create("{$baseUrl}/blogs/{$blog->slug}"));
        }

        // Add dynamic routes for cities
        $cities = City::all();
        foreach ($cities as $city) {
            $sitemap->add(Url::create("{$baseUrl}/{$city->slug}"));
        }

        // Save the sitemap to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        // Modify the XML to remove <changefreq> and <priority> tags
        $this->removeUnnecessaryTags(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }

    protected function removeUnnecessaryTags($filePath)
    {
        // Get the content of the sitemap
        $sitemapContent = file_get_contents($filePath);

        // Remove <changefreq> and <priority> tags
        $sitemapContent = preg_replace('/<changefreq>.*?<\/changefreq>/', '', $sitemapContent);
        $sitemapContent = preg_replace('/<priority>.*?<\/priority>/', '', $sitemapContent);

        // Write the modified content back to the file
        file_put_contents($filePath, $sitemapContent);
    }
}
