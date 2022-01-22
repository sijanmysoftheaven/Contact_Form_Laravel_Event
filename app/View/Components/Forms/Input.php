<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $name;
    public $id;
    public $class;
    public $label;
    public function __construct($type, $name, $id, $class, $label)
    {
        $this->name = $name;
        $this->type = $type;
        $this->id   = $id;
        $this->class=$class;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
