<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Option extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $value,
        public string $label
    )
    {
        //
    }

    public function isSelected(string $option): bool
    {
        return true;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.option');
    }
}
