<?php

namespace App\Livewire\HR\Requests;

use App\Models\Staff\RequestTimeOff;
use Livewire\Component;

class TableListView extends Component
{

    public $requestTimeOffs;

    public function mount()
    {
        $this->requestTimeOffs = RequestTimeOff::with('users')->get();
    }

    public function render()
    {
        return view('livewire.hr.requests.table-list-view', [
            'requestTimeOffs' => $this->requestTimeOffs,
        ]);
    }
}
