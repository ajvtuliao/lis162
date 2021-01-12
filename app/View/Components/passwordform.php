<?php

namespace App\View\Components;

use Illuminate\View\Component;

class passwordform extends Component
{
    public $action;
    public $formtype;
    public $altformtype;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $formtype, $altformtype)
    {
        $this->action=$action;
        $this->formtype=$formtype;
        $this->altformtype=$altformtype;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.passwordform');
    }
}
