<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateLocation extends Component
{
    use WithFileUploads;

    public $image;
    public $latitude;
    public $longitude;

    protected $rules = [
        'image' => 'required|image',
        'latitude' => 'required',
        'longitude' => 'required',
    ];

    public function createLocation()
    {
        $this->validate();

        $file = cloudinary()->upload($this->image->getRealPath())->getSecurePath();

        $location = Location::create([
            'user_id' => auth()->id(),
            'image' => $file,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $this->reset();

        return redirect()->route('location.create');
    }

    public function render()
    {
        return view('livewire.create-location');
    }
}
