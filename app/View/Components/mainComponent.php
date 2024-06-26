<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mainComponent extends Component
{
    public $title;
    public $subtitle;
    public $buttonText;
    public $image;
    public $imageAlt;
    public $isImageRightSide;
    public $isTitlePriorityDisplay;

    /**
     * Create a new component instance.
     * 
     * @param string $title
     * @param string $subtitle
     * @param string $buttonText
     * @param string $image
     * @param bool $isImageRightSide
     * @param bool $isTitlePriorityDisplay
     */
    public function __construct($title, $subtitle, $buttonText, $image, $imageAlt, $isImageRightSide, $isTitlePriorityDisplay)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->buttonText = $buttonText;
        $this->image = $image;
        $this->imageAlt = $imageAlt;
        $this->isImageRightSide = $isImageRightSide;
        $this->isTitlePriorityDisplay = $isTitlePriorityDisplay;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-component');
    }
}
