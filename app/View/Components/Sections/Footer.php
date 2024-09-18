<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $linkbtn;
    /**
     * Create a new component instance.
     */
    public function __construct($linkbtn)
    {
        $this->linkbtn = $linkbtn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("section.footer");
    }
}
