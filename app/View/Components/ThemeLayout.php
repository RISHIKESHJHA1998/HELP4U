<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThemeLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $header;

    public function _construct($header = null,)
    {
        $this->header = $header;
    }
    
    public function render()
    {
        return view('layouts.theme');
    }
}