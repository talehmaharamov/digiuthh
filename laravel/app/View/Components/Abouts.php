<?php

namespace App\View\Components;

use App\Models\About;
use Illuminate\View\Component;

class Abouts extends Component
{
    public $about;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->about = About::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.abouts');
    }
}
