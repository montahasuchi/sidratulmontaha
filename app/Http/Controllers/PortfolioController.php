<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Sidratul Montaha',
            'title' => 'Graphics & UI/UX Designer',
            'tagline' => 'I create clean, modern and user-focused visual experiences.',
            'location' => 'Bangladesh',
            'about' => "আমি একজন Passionate Graphics & UI/UX Designer. ব্র্যান্ডের জন্য clean, minimal & aesthetic visual solution তৈরি করতে ভালোবাসি।",
            'experience_years' => '2+',
            'main_tools' => ['Figma', 'Adobe Photoshop', 'Adobe Illustrator', 'Canva'],
        ];

        $experience = [
            [
                'role' => 'Graphic Designer',
                'company' => 'My English Tutor',
                'type' => 'Part-time / Remote',
                'duration' => '2025 – Present',
                'description' => 'Social media post, course thumbnail, banner, promotional graphics ডিজাইন করেছি যেগুলো English learning brand-এর visual identity স্ট্রং করেছে।',
                'highlights' => [
                    'YouTube thumbnail, Facebook & Instagram post ডিজাইন',
                    'Brand color, typography & layout guideline maintain',
                    'Team এর সাথে কাজ করে fast delivery নিশ্চিত করা',
                ],
            ],
        ];

        $skills = [
            'Branding & Logo Design',
            'Social Media Post Design',
            'UI Design (Website & Mobile App)',
            'Landing Page Layout',
            'Wireframing & Prototyping',
            'Presentation & Thumbnail Design',
        ];

        $projects = [
    [
        'title' => "Mental Health UI/UX Case Study & App with Prototyping",
        'category' => 'UI/UX Case Study & App with Prototyping',
        'description' => 'এই প্রোজেক্টটি শুরু হয়েছিল একটাই উদ্দেশ্য নিয়ে—মানসিক চাপকে হালকা করা...',
        'tools' => ['Photoshop', 'Illustrator', 'Figma'],
        'link' => 'https://www.behance.net/gallery/180678187/Mental-Health-UIUX-Case-Study-App-with-Prototyping',
        'image' => 'photo_2025-12-06_23-31-18.jpg',
    ],
    [
        'title' => 'Blood Bond Blood Donating App UI Design',
        'category' => 'Mobile App UI',
        'description' => '“রক্ত দান” শুধু রক্ত দেয়া নয়; এটা একটা মানবিক বন্ধন...',
        'tools' => ['Figma'],
        'link' => 'https://www.behance.net/gallery/228130793/Blood-Bond-Blood-Donating-App-UI-Design',
        'image' => 'photo_2025-12-06_23-17-05.jpg',
    ],
    [
        'title' => 'Yummify Food Recipe Mobile App UI Design',
        'category' => 'Mobile App UI',
        'description' => '“Yummify” তৈরি হয়েছে রান্নার দুনিয়াকে একটু সহজ, একটু রঙিন আর অনেক বেশি সুস্বাদু করে তোলার জন্য। অ্যাপের UI ডিজাইনে রাখা হয়েছে fresh visuals, clean cards, আর mouth-watering layout—যেন প্রতিটি স্ক্রিন খুললেই মনে হয় নতুন কোনো রেসিপির সুবাস ভেসে আসছে।',
        'tools' => ['Figma', 'Photoshop'],
        'link' => 'https://www.behance.net/gallery/227937279/Yummify-Food-Recipe-Mobile-App-UI-Design',
        'image' => 'photo_2025-12-06_23-17-12.jpg',
    ],
];

        $socials = [
            'behance' => 'https://www.behance.net/Moonsparklepix',      
            'dribbble' => 'https://dribbble.com/Moonsparklepix',
            'linkedin' => 'https://www.linkedin.com/in/sidratul-montaha-90b3a3183/',
            'email' => 'montaha.suchi@gmail.com', 
        ];

        return view('portfolio.index', compact('profile', 'experience', 'skills', 'projects', 'socials'));
    }
}