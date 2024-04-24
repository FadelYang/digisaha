<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navLink extends Component
{
    public $href;
    public $navName;
    public $isActive;

    /**
     * Create a new component instance.
     * 
     * @param string $href
     * @param string $navName
     * @param bool $isActive
     * @return void
     */
    public function __construct($href, $navName, $isActive)
    {
        $this->href = $href;
        $this->navName = $navName;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
