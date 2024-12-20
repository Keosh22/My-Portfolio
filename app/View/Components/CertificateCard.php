<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CertificateCard extends Component
{
    public $image;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $title)
    {
        $this->image  = $image;
        $this->title = $title; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.certificate-card');
    }
}
