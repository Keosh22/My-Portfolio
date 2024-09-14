<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $certificate_img = [
//         "basic_cloud" => "images/basic-level-cloud.jpg",
//         "advance_cloud" => "images/advance-cloud_page-0001.jpg",
//         "intermidiate_cloud" => "images/intemediate-cloud_page-0001.jpg",
//         "java" => "images/java.jpg",
//         "civil_service" => "images/civil-service.jpg",
//         "it_olympics" => "images/it-olympics.png"
//     ];

//     $data = [
//         "basic_cloud" => [
//             "image" => "images/basic-level-cloud.jpg",
//             "title" => "DICT - Basic Cloud Computing"
//         ],
//         "advance_cloud" => [
//             "image" => "images/advance-cloud_page-0001.jpg",
//             "title" => "DICT - Advance Cloud Computing"
//         ],
//         "intermediate_cloud" => [
//             "image" => "images/intemediate-cloud_page-0001.jpg",
//             "title" => "DICT - Intermediate Cloud Computing"
//         ],
//         "java" => [
//             "image" => "images/java.jpg",
//             "title" => "Java Programming NCIII"
//         ],
//         "civil_service" => [
//             "image" => "images/civil-service.jpg",
//             "title" => "Civil Service Professional Passer"
//         ],
//         "it_olympics" => [
//             "image" => "images/it-olympics.png",
//             "title" => "12th IT Olympics"
//         ] 
//     ];

//     return view('app', compact('data'));
// });


Route::get('/', [PortfolioController::class, 'index'])->name('home');
