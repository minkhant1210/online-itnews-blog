<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $class,$inputTitle,$name,$value,$type,$form;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class="fa-user",$inputTitle="Input Title",$name="name",$value=null,$type="text",$form=null)
    {
        $this->class = $class;
        $this->inputTitle = $inputTitle;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
