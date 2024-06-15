<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LinktreeController extends Controller
{
    public function index()
    {
        $sosmed = $this->getSosmedLinks();
        $donate = $this->getDonateLinks();
        $email = $this->getEmailLinks();

        return view('other.app', compact('sosmed', 'donate', 'email'));
    }

    private function getSosmedLinks()
    {
        return [
            'Instagram' => [
                'url' => 'https://www.instagram.com/arvandhaa',
                'icon' => 'fab fa-instagram',
            ],
            'Threads' => [
                'url' => 'https://www.threads.net/@arvandhaa',
                'icon' => 'fas fa-comments',
            ],
            'Twitter' => [
                'url' => 'https://twitter.com/arvandhaa',
                'icon' => 'fab fa-twitter',
            ],'Github' => [
                'url' => 'https://github.com/arvandha121',
                'icon' => 'fab fa-github',
            ],
        ];
    }

    private function getDonateLinks()
    {
        return [
            'Saweria | Local' => [
                'url' => 'https://saweria.co/arvandhaa',
                'icon' => 'fas fa-coffee',
            ],
            'Tako | Local' => [
                'url' => 'https://tako.id/@Arvandhaa',
                'icon' => 'fas fa-donate',
            ],
            'Sociabuzz | International' => [
                'url' => 'https://sociabuzz.com/arvandha',
                'icon' => 'fas fa-globe',
            ],
        ];
    }
    
    private function getEmailLinks()
    {
        return [
            'Email' => [
                'url' => 'https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=cparvandha@gmail.com',
                'icon' => 'fas fa-envelope',
            ],
        ];
    }
}
