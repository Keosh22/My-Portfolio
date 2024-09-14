<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public $image;
    public $alt;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $alt)
    {
        $this->image = $image;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon');
    }
}
