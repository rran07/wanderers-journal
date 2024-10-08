<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownMenu extends Component
{

    public $isOpen = false;

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;

    }

    public function render()
    {
        return view('livewire.dropdown-menu');
    }
}
