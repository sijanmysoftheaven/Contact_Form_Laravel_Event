<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $name;
    public $value;
    public $class;
    public function __construct($type, $name, $value, $class)
    {
        //dd($class);

        $this->name = $name;
        $this->type = $type;
        $this->value= $value;
        $this->class=$class;  
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.submit');
    }
}
