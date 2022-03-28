<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;

class DisplayLocations extends Component
{
    public function render()
    {
        return view('livewire.display-locations', [
            'locations' => Location::get()
        ]);
    }
}
