<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class menu extends Component
{
    public function __construct(public string $xestilo)
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}
