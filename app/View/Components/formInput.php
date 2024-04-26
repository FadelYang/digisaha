<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formInput extends Component
{
    public $inputName;
    public $inputType;
    public $inputText;
    public $placeholder;
    public $classAttribute;

    /**
     * Create a new component instance.
     * @param string $inputName
     * @param string $inputType
     * @param string $inputText
     * @param string $placeholder
     * @param string $classAttribute
     */
    public function __construct($inputName, $inputType, $inputText, $placeholder, $classAttribute)
    {
        $this->inputName = $inputName;
        $this->inputType = $inputType;
        $this->inputText = $inputText;
        $this->placeholder = $placeholder;
        $this->classAttribute = $classAttribute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
