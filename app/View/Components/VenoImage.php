<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VenoImage extends Component
{
    public $big,$small,$gall;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($big=null,$small=null,$gall=null)
    {
        $this->big  = $big;
        $this->small  = $small;
        $this->gall  = $gall;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.veno-image');
    }
}
