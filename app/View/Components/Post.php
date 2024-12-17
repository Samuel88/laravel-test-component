<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $description,
    )
    {
        //
    }

    public function shouldRender(): bool {
        if ($this->title === "Cosetta Greco") {
            return false;
        } else {
            return true;
        }
    }

    public function descriptionTrimmed(): string {
        return substr($this->description, 0, 20);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post');
    }
}
