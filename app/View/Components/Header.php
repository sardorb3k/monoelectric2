<?php

namespace App\View\Components;

use App\Models\SiteInformation;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $information = SiteInformation::first();
        return view('components.header', compact('information'));
    }
}
