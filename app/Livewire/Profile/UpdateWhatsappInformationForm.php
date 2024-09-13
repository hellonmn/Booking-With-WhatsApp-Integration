<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpdateWhatsappInformationForm extends Component
{
    public $state = [];

    public function render()
    {
        return view('livewire.profile.update-whatsapp-information-form');
    }
}
