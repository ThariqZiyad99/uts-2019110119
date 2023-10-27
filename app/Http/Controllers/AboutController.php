<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About Us';
        $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
        $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';

        $sponsors = [
            [
                "name" => "PlayStation",
                "image" => "https://static.vecteezy.com/system/resources/previews/020/190/708/non_2x/playstation-ps5-ps4-logo-free-free-vector.jpg",
                "link" => "https://www.playstation.com/en-id/"
            ],
            [
                "name" => "Inter Milan",
                "image" => "https://akcdn.detik.net.id/community/media/visual/2021/03/30/logo-baru-inter-milan_169.jpeg?w=600&q=90",
                "link" => "https://www.inter.it/en"
            ],
            [
                "name" => "KFC",
                "image" => "https://assets.stickpng.com/images/58429977a6515b1e0ad75ade.png",
                "link" => "https://kfcku.com/"
            ],
            [
                "name" => "Netflix",
                "image" => "https://images.ctfassets.net/4cd45et68cgf/Rx83JoRDMkYNlMC9MKzcB/2b14d5a59fc3937afd3f03191e19502d/Netflix-Symbol.png?w=700&h=456",
                "link" => "https://www.netflix.com/id-en/"
            ],
            [
                "name" => "Youtube",
                "image" => "https://img.freepik.com/premium-vector/red-youtube-logo-social-media-logo_197792-1803.jpg?w=2000",
                "link" => "https://about.youtube//"
            ],
            [
                "name" => "Pepsi",
                "image" => "https://seeklogo.com/images/P/pepsi-logo-94D7DEF922-seeklogo.com.png",
                "link" => "https://www.pepsi.com/"
            ]
        ];

        $faqs = [
            [
                "question" => "What are the benefits of sponsoring a blogging website?",
                "answer" => "When your brand is featured on our popular website, it will be seen by a large audience of potential customers.",
            ],
            [
                "question" => "How much does it cost to sponsor our website?",
                "answer" => "The cost of sponsorship depends on the size of your brand and the length of time you want to sponsor us.",
            ],
            [
                "question" => "How long does it take to sponsor our website?",
                "answer" => "The length of sponsorship depends on the size of your brand and the length of time you want to sponsor us.",
            ],
            [
                "question" => "How do I sponsor your website?",
                "answer" => "Please contact us using the form on this page and we will get back to you with more details.",
            ],
            [
                "question" => "How do I contact you?",
                "answer" => "Please contact us using the form on this page and we will get back to you with more details.",
            ]
        ];

        return view('about', compact('title', 'description', 'button', 'sponsors', 'faqs'));
    }
}
