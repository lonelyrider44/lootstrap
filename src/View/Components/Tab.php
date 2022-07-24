<?php

namespace LR\Lootstrap\View\Components;

use Illuminate\View\Component;

class Tab extends Component
{
    public $name;
    public $label;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = '', $active = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('lootstrap::components.tab');
    }
}
