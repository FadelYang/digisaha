<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $alertType;
    public $message;

    /**
     * Create a new component instance.
     * @param string $alertType
     * @param string $message
     * 
     */
    public function __construct($alertType, $message)
    {
        $this->alertType = $alertType;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
