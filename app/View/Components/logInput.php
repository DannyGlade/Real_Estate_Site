<?php

namespace App\View\Components;

use Illuminate\View\Component;

class logInput extends Component
{
    public $type;
    public $label;
    public $name;
    public $placeholder;
    public $status;
    public $value;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label, $name, $placeholder, $status = null, $value = null)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->status = $status;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.log-input');
    }
}
