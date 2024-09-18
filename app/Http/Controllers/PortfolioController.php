<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $certificates = [
                    "basic_cloud" => [
                        "image" => "images/basic-level-cloud.jpg",
                        "title" => "DICT - Basic Cloud Computing"
                    ],
                    "advance_cloud" => [
                        "image" => "images/advance-cloud_page-0001.jpg",
                        "title" => "DICT - Advance Cloud Computing"
                    ],
                    "intermediate_cloud" => [
                        "image" => "images/intemediate-cloud_page-0001.jpg",
                        "title" => "DICT - Intermediate Cloud Computing"
                    ],
                    "java" => [
                        "image" => "images/java.jpg",
                        "title" => "Java Programming NCIII"
                    ],
                    "civil_service" => [
                        "image" => "images/civil-service.jpg",
                        "title" => "Civil Service Professional Passer"
                    ],
                    "it_olympics" => [
                        "image" => "images/it-olympics.png",
                        "title" => "12th IT Olympics"
                    ] 
                ];

        $icons = [
            "html" => [
                "image" => "images/Html-5.png",
                "alt" => "html-icon"
            ],
            "css" => [
                "image" => "images/CSs.png",
                "alt" => "css-icon"
            ],
            "javascsript" => [
                "image" => "images/JavaScript.png",
                "alt" => "javascript-icon"
            ],
            "laravel" => [
                "image" => "images/laravel_icon.png",
                "alt" => "laravel-icon"
            ],
            "mysql" => [
                "image" => "images/mysql_logo.png",
                "alt" => "mysql-icon"
            ],
            "tailwind" => [
                "image" => "images/Tailwind.png",
                "alt" => "tailwind-icon"
            ],
            "git" => [
                "image" => "images/git_icon.png",
                "alt" => "git-icon"
            ]
        ];


        $linkbtn = [
            "facebook" => [
                "image" => "images/facebook_icon.png",
                "url" => "https://www.facebook.com/Keosh22?mibextid=ZbWKwL",
                "alt" => "facebook_icon"
            ],
            "instagram" => [
                "image" => "images/instagram_icon.png",
                "url" => "https://www.instagram.com/keoshhh?igsh=ZXN3eGtpOW9mcTdh",
                "alt" => "instagram_icon"
            ],
            "youtube" => [
                "image" => "images/youtube_icon.png",
                "url" => "https://youtube.com/@buenavideskenjoshua8057?si=7Z-RI8scjgjUqAwn",
                "alt" => "youtube_icon"
            ],
            "gmail" => [
                "image" => "images/gmail_icon.png",
                "url" => "#",
                "alt" => "gmail_icon"
            ],
            "indeed" => [
                "image" => "images/indeed_icon.png",
                "url" => "https://profile.indeed.com/p/kenjoshuab-jdkrnrb",
                "alt" => "indeed_logo"
            ]
        ];



        return view("app", ["certificates" => $certificates, "icons" => $icons, "linkbtn" => $linkbtn]);
    }

  
}
