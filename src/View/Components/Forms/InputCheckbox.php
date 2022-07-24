<?php

namespace LR\Lootstrap\View\Components\Forms;

use Illuminate\View\Component;

class InputCheckbox extends Component
{
    public $label;
    public $name;
    public $value;
    public $disabled;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $name = '', $value = false, $disabled = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('lootstrap::components.forms.input-checkbox');
    }
}
