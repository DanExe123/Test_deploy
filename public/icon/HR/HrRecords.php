<?php declare(strict_types=1);

namespace App\Livewire\HR;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class HrRecords extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.hr.hr-records',[
            'users' => User::paginate(5)
        ]);
    }
}
