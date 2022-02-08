<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBarLink extends Component
{
    public $link,$title,$class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link="#",$title="title",$class="fa-home")
    {
        $this->link = $link;
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-bar-link');
    }
}
