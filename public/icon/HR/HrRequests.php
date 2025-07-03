<?php declare(strict_types=1);

namespace App\Livewire\HR;

use App\Models\Staff\RequestTimeOff;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class HrRequests extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $requestTimeOffs = RequestTimeOff::whereHas('users', function ($query) {
            $query->where('user_id', '<>', auth()->id());
        })
        ->paginate(5);

        return view('livewire.hr.hr-requests', compact('requestTimeOffs'));
    }
}
