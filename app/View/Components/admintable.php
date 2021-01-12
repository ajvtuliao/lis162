<?php

namespace App\View\Components;

use Illuminate\View\Component;

class admintable extends Component
{
    public $members;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($members)
    {
        $this->members=$members;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admintable');
    }
}
