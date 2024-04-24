<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderBreadcrumb extends Component
{
    public $pageTitle;

    /**
     * Create a new component instance.
     * @param string $pageTitle
     */
    public function __construct($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-breadcrumb');
    }
}
