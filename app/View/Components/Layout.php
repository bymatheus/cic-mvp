<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public bool $dashboard;
    public string $title;
    public bool $key;

    public function __construct(
        bool $dashboard,
        string $title,
        bool $key
    ) {
        $this->dashboard = $dashboard;
        $this->title = $title;
        $this->key = $key;
    }

    public function render(): View | string | Closure
    {
        return view('components.layout');
    }
}
