<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Announcement; // Make sure to import your model

class NoticeBar extends Component
{
    public $announcement;

    public function __construct()
    {
        $this->announcement = Announcement::latest()->first();
    }

    public function render()
    {
        return view('components.notice-bar');
    }
}
