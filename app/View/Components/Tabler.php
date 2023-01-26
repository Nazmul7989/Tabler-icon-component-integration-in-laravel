<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabler extends Component
{
    public $icon;
    public $class;
    public $strokeWidth;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon,$class=null,$strokeWidth=null)
    {
        $this->icon = $icon;
        $this->class = $class;
        $this->strokeWidth = $strokeWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabler');
    }
}
