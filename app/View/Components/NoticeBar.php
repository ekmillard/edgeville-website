<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Announcement;
use Illuminate\View\View;

class NoticeBar extends Component
{
    public $announcement;

    public function __construct()
    {
        $this->announcement = Announcement::latest()->first();
    }

    public function render(): View
    {
        return view('components.notice-bar');
    }
}
