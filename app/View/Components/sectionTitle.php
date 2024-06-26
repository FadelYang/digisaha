<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sectionTitle extends Component
{
    public $title;
    public $subtitle;

    /**
     * Create a new component instance.
     * @param string $title
     * @param string $subtitle
     */
    public function __construct($title, $subtitle)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-title');
    }
}
