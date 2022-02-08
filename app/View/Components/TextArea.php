<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $title,$name,$rows,$value,$class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title="Textarea Title",$name="textarea",$rows=10,$value=null,$class="fa-file")
    {
        $this->title = $title;
        $this->name = $name;
        $this->rows = $rows;
        $this->value = $value;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-area');
    }
}
