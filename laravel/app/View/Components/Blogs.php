<?php

namespace App\View\Components;

use App\Models\Blog;
use Illuminate\View\Component;

class Blogs extends Component
{
    public $blogs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blogs');
    }
}
