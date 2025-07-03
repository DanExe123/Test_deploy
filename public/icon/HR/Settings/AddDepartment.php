<?php

namespace App\Livewire\HR\Settings;
use App\Models\Core\Department\Department;
use App\Models\Core\Admin\Companies as AdminCompanies;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddDepartment extends Component
{
    public $name;
    public $company;
    public $manager;
    public $working_days = [
        'monday' => ['start_time' => null, 'end_time' => null, 'is_selected' => false],
        'tuesday' => ['start_time' => null, 'end_time' => null, 'is_selected' => false],
        'wednesday' => ['start_time' => null, 'end_time' => null, 'is_selected' => false],
        'thursday' => ['start_time' => null, 'end_time' => null, 'is_selected' => false],
        'friday' => ['start_time' => null, 'end_time' => null, 'is_selected' => false],
    ];
    public $allow_timesheet_view;


 
    public function saveDepartment()
{
    // Save the department directly without validation
    Department::create([
        'name' => $this->name,
        'manager_id' => (int) $this->manager, 
        'company_id' => (int) $this->company,
        'working_days' => json_encode($this->working_days),
        'allow_timesheet_view' => $this->allow_timesheet_view,
    ]);

    session()->flash('message', 'Department saved successfully!');
    return redirect()->route('hr.add-department');
    }

    public function render()
    {
         $companies = AdminCompanies::all(); // Fetch all companies
         $users = User::all(); // Fetch all users

    return view('livewire.hr.settings.add-department', [
        'companies' => $companies, // Pass companies to the view
        'users' => $users,         // Pass users to the view
    ]);
    }
    }
