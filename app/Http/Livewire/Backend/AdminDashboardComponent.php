<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.admin-dashboard-component')->layout('backend.layouts.master');
    }
}
